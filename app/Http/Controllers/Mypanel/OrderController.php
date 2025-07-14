<?php

namespace App\Http\Controllers\Mypanel;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Area;
use App\Models\MailConfig;
use App\Models\State;
use App\Models\City;
use App\Models\Customer;
use App\Models\Division;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderDetails;
use App\Models\OrderPayment;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Session; // Import Session for flash messages
use App\Services\MailService;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = $user = Auth::guard('mypanel')->user()->id;
        $data['orders'] = Order::orderBy('id', 'DESC')->where('customer_id', $user)->paginate(10);
        $data['profile'] = Customer::where('id', $user)->first();
        return view('Mypanel.user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'phone'          => 'required|string|max:20',
            'address'        => 'required|string',
            'state_id'       => 'required|exists:cs_states,id',
            'city_id'        => 'required|exists:cs_cities,id',
            'payment_method' => 'required|string',
            'delivery_fee'   => 'nullable|numeric|min:0',
        ]);

        try {
            DB::beginTransaction();

            // Auto-create or authenticate customer
            $customer = $this->getOrCreateCustomer($request);

            // Cart validation
            $cart = Cart::getContent();
            if ($cart->isEmpty()) {
                return back()->with('error', 'Your cart is empty!');
            }

            // Prepare order
            $orderData = $this->prepareOrderData($request, $customer);
            $order = Order::create($orderData);
            $orderId = $order->id;

            // Save address
            OrderAddress::create([
                'order_id'    => $orderId,
                'customer_id' => $customer->id,
                'name'        => $request->name,
                'phone'       => $request->phone,
                'state_id'    => $request->state_id,
                'city_id'     => $request->city_id,
                'state_name'  => State::find($request->state_id)->name,
                'city_name'   => City::find($request->city_id)->name,
                'address'     => $request->address,
            ]);

            // Order details
            foreach ($cart as $item) {
                OrderDetails::create([
                    'order_id'   => $orderId,
                    'product_id' => $item->id,
                    'name'       => $item->name,
                    'qty'        => $item->quantity,
                    'price'      => $item->price,
                    'total'      => $item->price * $item->quantity,
                ]);
            }

            // Save payment info
            $this->storePaymentInfo($request, $orderId, $orderData['total']);

            // Email invoice
            $this->sendInvoiceMail($customer, $order);

            // Payment gateway handling
            if ($orderData['payment_type'] === 'CS-SSLCOM') {
                $this->initiateSslCommerz($customer, $order, $request->address);
            } else {
                Cart::clear();
            }

            DB::commit();
            return redirect()->route('mypanel.morder.index')->with('status', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Order placement failed: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }

    public function store_14072025(Request $request)
    {
        if (!Auth::guard('mypanel')->check()) {
            $user = Customer::firstOrCreate(
                ['phone' => $request->phone],
                [
                    'name'     => $request->name,
                    'address'  => $request->address,
                    'status'   => 'Active',
                    'password' => bcrypt(12345678),
                ]
            );

            Auth::guard('mypanel')->login($user);
        }
        try {
            DB::beginTransaction();
            $cartCollection = Cart::getContent();
            if ($cartCollection->isEmpty()) {
                return redirect()->route('checkout')->with('error', 'Your cart is empty!');
            }
            $state                     = State::where('id', $request->state_id)->first();
            $city                      = City::where('id', $request->city_id)->first();
            $method                    = explode('@', $request->payment_method);
            $paymentMethod             = $method[0] ?? '';
            $paymentId                 = $method[1] ?? '';
            $customerId                  = Auth::guard('mypanel')->user()->id;
            $shipping['customer_id']   = $customerId;
            $shipping['name']          = $request->name;
            $shipping['phone']         = $request->phone;
            $shipping['state_name']    = $state->name;
            $shipping['city_name']     = $city->name;
            $shipping['state_id']      = $request->state_id;
            $shipping['city_id']       = $request->city_id;
            $shipping['address']       = $request->address;
            $shipping_address          = json_encode($shipping);
            $delivery_fee              = $request->delivery_fee;
            $order                     = array();
            $order['currency']         = config('app.currency')->title ?? 'BDT';
            $order['invoice_no']       = "IN" . time();
            $order['callan_no']        = "CL" . time();
            $order['customer_id']      = $customerId;
            $order['subtotal']         = Cart::getSubTotal();
            $order['discount']         = 0;
            $order['vat']              = 0;
            $order['delivary_charge']  = $delivery_fee;
            $order['total']            = Cart::getTotal() - $order['discount'] + $order['delivary_charge'] + ($order['vat'] * $order['subtotal'] / 100); # You cant not pay less than 10
            $order['shipping_address'] = $shipping_address;
            if ($paymentMethod == 'CS-COD') {
                $order['payment_type'] = "CS-COD";
                $order['payment_status'] = "Pending";
            } elseif ($paymentMethod == 'CS-BKASH') {
                $order['payment_type'] = "CS-BKASH";
                $order['payment_status'] = "Pending";
            } elseif ($paymentMethod == 'CS-ROCKET') {
                $order['payment_type'] = "CS-ROCKET";
                $order['payment_status'] = "Pending";
            } elseif ($paymentMethod == 'CS-SSLCOM') {
                $order['payment_type'] = "CS-SSLCOM";
                $order['payment_status'] = "Pending";
            }
            //$order['payment_details'] = "details";
            $order['cupon_id']     = "cupon_id";
            $order['cupon_amount'] = "cupon_amount";
            $order['status']       = "Pending";
            $orderId               = Order::create($order)->id;

            //Shipping Insert
            $shipping['order_id'] = $orderId;
            OrderAddress::create($shipping);

            //order details table
            foreach ($cartCollection as $key => $value) {
                $order_details['order_id'] = $orderId;
                $order_details['product_id'] = $key;
                $order_details['name'] = $value->name;
                //$order_details['sized'] = $value->attributes->sized;
                //$order_details['colored'] = $value->attributes->colored;
                $order_details['qty'] = $value->quantity;
                $order_details['price'] = $value->price;
                $order_details['total'] = $value->price * $value->quantity;
                OrderDetails::create($order_details);
            }

            //Payment Insert
            $payment['order_id'] = $orderId;
            if ($paymentMethod != '') {
                $payment['payment_id'] = $paymentId;
                $payment['transaction_id'] = $paymentMethod;
                $payment['full_info'] = $paymentMethod;
                $payment['amount'] =  $order['total'];
                $pay = OrderPayment::create($payment);
            }
            // elseif ($paymentMethod == 'CS-BKASH') {
            //     $payment['payment_id'] = $paymentId;
            //     $payment['transaction_id'] = $request->transaction;
            //     $payment['full_info'] = $request->bkashnumber;
            //     $payment['amount'] =  $order['total'];
            //     $pay = OrderPayment::create($payment);
            // } elseif ($paymentMethod == 'CS-ROCKET') {
            //     $payment['payment_id'] = $paymentId;
            //     $payment['transaction_id'] = $request->rocket_transaction;
            //     $payment['full_info'] = $request->rocket_number;
            //     $payment['amount'] =  $order['total'];
            //     $pay = OrderPayment::create($payment);
            // }
            $customer = Customer::where('id', $customerId)->first();
            if ($paymentMethod == 'CS-SSLCOM') {
                // default code is bellow.
                $post_data = array();
                $post_data['total_amount'] = $order['total']; # You cant not pay less than 10
                $post_data['currency'] = "BDT";
                $post_data['tran_id'] = $order['invoice_no']; // tran_id must be unique

                # CUSTOMER INFORMATION
                $post_data['cus_name']     = $customer->name;
                $post_data['cus_email']    = $customer->email;
                $post_data['cus_add1']     = $shipping['address'];
                $post_data['cus_add2']     = "";
                $post_data['cus_city']     = "";
                $post_data['cus_state']    = "";
                $post_data['cus_postcode'] = "";
                $post_data['cus_country']  = "Bangladesh";
                $post_data['cus_phone']    = $customer->phone;
                $post_data['cus_fax']      = "";

                # SHIPMENT INFORMATION
                $post_data['ship_name']        = $shipping['name'];
                $post_data['ship_add1']        = $shipping['address'];
                $post_data['ship_add2']        = "";
                $post_data['ship_city']        = $shipping['state_name'];
                $post_data['ship_state']       = $shipping['city_name'];
                $post_data['ship_postcode']    = "1000";
                $post_data['ship_phone']       = $shipping['phone'];
                $post_data['ship_country']     = "Bangladesh";
                $post_data['shipping_method']  = "NO";
                $post_data['product_name']     = "Electronics";
                $post_data['product_category'] = "Goods";
                $post_data['product_profile']  = "physical-goods";

                $sslc = new SslCommerzNotification();
                # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
                //$payment_options = $sslc->makePayment($post_data, 'hosted');
                //$sslc = new SSLCommerz();
                # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
                $payment_options = $sslc->makePayment($post_data, 'hosted');

                if (!is_array($payment_options)) {
                    print_r($payment_options);
                    $payment_options = array();
                }
            } else {
                Cart::clear();
            }
            if ($customer->email) {
                $emailData = [
                    'customer_name' => $customer->name,
                    'invoice_id'    => $order['invoice_no'],
                    'amount'        => $order['total'],
                ];
                MailService::sendCustomerInvoice(
                    $customer->email ?? 'fallback@example.com',
                    $emailData
                );
            }

            DB::commit();
            Session::flash('status', 'Order has is Successful! placed!');
            return redirect()->route('mypanel.morder.index')->with('status', 'Order has is Successful! placed!');
        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();
            Session::flash('status', $e->getMessage());
            return redirect()->route('checkout')->with('status',  $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user']    = $user  = Auth::guard('mypanel')->user()->id;
        $data['profile'] = Customer::where('id', $user)->first();
        $data['order']   = $order = Order::with([
            'address.state:id,name',
            'address.city:id,name'
        ])
            ->where('invoice_no', $id)
            ->first();
        // return $order;
        $data['orders'] = OrderDetails::where('order_id', $order->id)->get();
        return view('Mypanel.user', $data);
    }

    /**
     * Download a PDF copy of the invoice for the order with the given ID
     *
     * @param int $id The ID of the order
     * @return \Illuminate\Http\Response
     */

    public function invoice($id)
    {
        $data = ['invoice_no' => $id];
        $pdf = PDF::loadView('Mypanel.order.invoice', $data);
        return $pdf->stream('invoice-' . $id . '.pdf');
    }


    private function getOrCreateCustomer(Request $request)
    {
        if (!Auth::guard('mypanel')->check()) {
            $user = Customer::firstOrCreate(
                ['phone' => $request->phone],
                [
                    'name'     => $request->name,
                    'address'  => $request->address,
                    'status'   => 'Active',
                    'password' => bcrypt('12345678'),
                ]
            );
            Auth::guard('mypanel')->login($user);
            return $user;
        }

        return Auth::guard('mypanel')->user();
    }

    private function prepareOrderData(Request $request, $customer)
    {
        $methodData = explode('@', $request->payment_method);
        $paymentType = $methodData[0] ?? 'Unknown';
        $invoiceNo = 'IN' . now()->timestamp;

        return [
            'currency'         => config('app.currency.title', 'BDT'),
            'invoice_no'       => $invoiceNo,
            'callan_no'        => 'CL' . now()->timestamp,
            'customer_id'      => $customer->id,
            'subtotal'         => Cart::getSubTotal(),
            'discount'         => 0,
            'vat'              => 0,
            'delivary_charge'  => $request->delivery_fee,
            'total'            => Cart::getTotal() + $request->delivery_fee,
            'shipping_address' => json_encode([
                'name'        => $request->name,
                'phone'       => $request->phone,
                'state_id'    => $request->state_id,
                'city_id'     => $request->city_id,
                'state_name'  => State::find($request->state_id)->name,
                'city_name'   => City::find($request->city_id)->name,
                'address'     => $request->address,
            ]),
            'payment_type'     => $paymentType,
            'payment_status'   => 'Pending',
            'cupon_id'         => null,
            'cupon_amount'     => 0,
            'status'           => 'Pending',
        ];
    }

    private function storePaymentInfo(Request $request, $orderId, $amount)
    {
        $methodData = explode('@', $request->payment_method);
        if (!$methodData[0]) return;

        OrderPayment::create([
            'order_id'       => $orderId,
            'payment_id'     => $methodData[1] ?? null,
            'transaction_id' => $methodData[0],
            'full_info'      => $methodData[0],
            'amount'         => $amount,
        ]);
    }

    private function sendInvoiceMail($customer, $order)
    {
        if (!$customer->email) return;

        MailService::sendCustomerInvoice($customer->email, [
            'customer_name' => $customer->name,
            'invoice_id'    => $order['invoice_no'],
            'amount'        => $order['total'],
        ]);
    }

    private function initiateSslCommerz($customer, $order, $shippingAddress)
    {
        $sslc = new SslCommerzNotification();
        $data = [
            'total_amount'      => $order['total'],
            'currency'          => 'BDT',
            'tran_id'           => $order['invoice_no'],
            'cus_name'          => $customer->name,
            'cus_email'         => $customer->email ?? 'demo@ssl.com',
            'cus_add1'          => $shippingAddress,
            'cus_city'          => 'Dhaka',
            'cus_state'         => '',
            'cus_postcode'      => '',
            'cus_country'       => 'Bangladesh',
            'cus_phone'         => $customer->phone,
            'product_name'      => 'Order Product',
            'product_category'  => 'Goods',
            'product_profile'   => 'general',
            'ship_name'         => $customer->name,
            'ship_add1'         => $shippingAddress,
            'ship_city'         => 'Dhaka',
            'ship_country'      => 'Bangladesh',
            'shipping_method'   => 'Courier',
        ];
        $sslc->makePayment($data, 'hosted');
    }
}
