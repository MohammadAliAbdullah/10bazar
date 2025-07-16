<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\State;
use App\Models\City;
use App\Models\Division;
use App\Models\PaymentGetway;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Auth;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Customer;
use App\Models\Voucher;
use App\Models\Coupon;
use App\Models\ShippingMethod;
use App\Models\ShippingZone;
use App\Models\ShippingZoneLocation;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Checkoutscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function states(Request $request)
    {
        $zoneId          = $request->zone_id;
        $shippingMethods = ShippingMethod::where('shipping_zone_id', $zoneId)->get();
        $states          = ShippingZoneLocation::with('state')
            ->where('shipping_zone_id', $zoneId)
            ->get()
            ->groupBy('state_id')
            ->map(function ($group) {
                $state = $group->first()->state;
                //  return $state;
                return [
                    'id' => $state->id,
                    'name' => $state->name
                ];
            });
        return response()->json(['states' => $states, 'shippingMethods' => $shippingMethods]);
    }

    public function cities(Request $request)
    {
        $cities = ShippingZoneLocation::with('city')
            ->where('state_id', $request->state_id)
            ->get()
            ->groupBy('city_id')
            ->map(function ($group) {
                $city = $group->first()->city;
                return $city;
                // return [
                //     'id' => $city->id,
                //     'name' => $city->name,
                //     'state_id' => $city->state_id,
                //     'city_id' => $city->id
                // ];
            })
            ->sortBy(function ($item) {
                return [$item->state_id, $item->city_id];
            })
            ->values();
        // return $cities;
        return response()->json($cities);
    }

    public function checkout()
    {
        // if (Auth::guard('mypanel')->user()) {
        $data['customer'] = Auth::guard('mypanel')->user();
        $data['cartCollection'] = Cart::getContent();

        $data['zone'] = ShippingZone::where('is_default', 1)->first();
        $zoneId = $data['zone']->id;
        $data['zoneLocation'] = ShippingZoneLocation::where('shipping_zone_id', $zoneId)
            ->where('is_default', 1)
            ->orderBy('id', 'DESC')
            ->first();

        $stateId = $data['zoneLocation']->state_id;
        $cityId = $data['zoneLocation']->city_id;
        $data['state'] = State::where('id', $stateId)->first();
        $data['city'] = City::where('id', $cityId)->first();
        // drop down

        $data['zones'] =  ShippingZone::orderBy('is_default', 'desc')->get()->pluck('name', 'id')->toArray();
        $data['states'] = State::orderBy('name', 'ASC')
            ->where('id', $stateId)
            ->get()->pluck('name', 'id')->toArray();
        // Get the selected city
        $selectedCity = City::where('id', $cityId)->pluck('name', 'id')->toArray();

        // Get other cities in the same state (excluding selected city), ordered by name
        $otherCities = City::orderBy('name', 'ASC')
            ->where('state_id', $stateId)
            ->where('id', '!=', $cityId)
            ->pluck('name', 'id')
            ->toArray();

        // Merge selected city at the top
        $data['cities'] = $selectedCity + $otherCities;
        // shipping method
        $data['shippingMethods'] = ShippingMethod::orderBy('base_fee', 'ASC')
            ->where([['is_active', '1'], ['shipping_zone_id', $zoneId]])
            ->get();

        $data['paymentMethods'] = PaymentMethod::orderBy('id', 'ASC')->where([['is_active', '1'], ['is_web', 1]])->get();
        return view("Frontend.Page.checkout", $data);
        // } else {
        // session(['link' => url()->previous()]);
        // return redirect()->route('login');
        // }
    }
    public function transaction_fee(Request $request)
    {
        $district = $request->district;
        $condition1 = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'transaction_fee',
            'type' => 'transaction',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '+20',
            'order' => 1
        ));
        $customer = Auth::guard('mypanel')->user();

        if ($district != "Dhaka") {

            Cart::session($customer->id)->condition($condition1);
        } elseif ($district == "Dhaka") {
            Cart::session($customer->id)->clearCartConditions($condition1);
        }

        $items = Cart::session($customer->id)->getContent();

        return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coupon(Request $request)
    {
        // if (!Auth::guard('mypanel')->user()) {
        //     return response()->json('Please login first !!!');
        //     exit();
        // }
        $code         = $request->coupon_code;
        $shipping_fee = $request->shipping_fee;
        $coupon       = DB::table('cs_coupons')
            ->where('coupon_code', $code)
            ->where('is_active', 1)
            ->whereDate('date_from', '<=', Carbon::today())
            ->whereDate('date_to', '>=', Carbon::today())
            ->first();
        // dd($coupon);
        if (!$coupon) {
            return response()->json(['status' => 'error', 'message' => 'Invalid or expired coupon code.']);
        }

        if ($coupon->qty <= $coupon->usedQty) {
            return response()->json(['status' => 'error', 'message' => 'Coupon usage limit exceeded.']);
        }

        $subTotal = Cart::getSubTotal();
        $discountAmount = ($subTotal * $coupon->discount_percent) / 100;
        $shipping   = $shipping_fee;
        $grandTotal = $subTotal - $discountAmount + $shipping;
        
        session([
            'applied_coupon' => [
                'code' => $coupon->coupon_code,
                'discount' => $discountAmount,
                'id' => $coupon->id,
            ]
        ]);

        return response()->json([
            'status' => 'success',
            'discount_amount' => number_format($discountAmount, 2),
            'grand_total' => number_format($grandTotal, 2),
        ]);

        exit;
        $coupon_code = $request->coupon_code;
        $is_used     = Coupon::where([['coupon', '=', $coupon_code], ['user_id', '=', Auth::guard('mypanel')->user()->id]])->first();
        $find_coupon = Voucher::where([['code', '=', $coupon_code], ['status', '=', 'Ongoing']])->first();

        if ($find_coupon && ($find_coupon->useges_qty < $find_coupon->voucher_limit)) {
            $is_shop = $find_coupon->product_id;
            if ($find_coupon->product_id == "Shop") {
                $target = "subtotal";

                $this->apply_coupon($is_shop, $find_coupon, $target);
            } else {
                # check if cart has product id in $find_coupon variable.
                $target = "subtotal";
                $this->apply_coupon($is_shop, $is_used, $find_coupon, $target);
            }
        } else {
            return response()->json('Invalid coupon code !!!');
            exit();
            //return response()->json($this->message);
        }
        return response()->json($this->message);
    }

    public function apply_coupon($is_shop, $is_used, $find_coupon, $target)
    {
        if ($is_used == null) {
            if ($find_coupon->rewordtype == 'Cashback') {
                // update user profile to got a cashback....
            } else {
                if ($is_shop == "Shop") {
                    $this->coupon_condition = new \Darryldecode\Cart\CartCondition(array(
                        'name' => $find_coupon->name,
                        'type' => $find_coupon->amount_type,
                        'target' => $target,
                        'value' => - ($find_coupon->rewordtype == 'Discount' ? ($find_coupon->amount_type == 'Percentage' ? ($find_coupon->discount_amount * Cart::session(Auth::guard('mypanel')->user()->id)->getSubTotal()) / 100 : $find_coupon->discount_amount) : 0),
                        'order' => 1
                    ));
                    Cart::session(Auth::guard('mypanel')->user()->id)->condition($this->coupon_condition);
                } else {

                    // lets create first our condition instance
                    $this->item_price = 0;
                    $this->product_id_array = explode(',', $find_coupon->product_id);
                    $this->data_product = Cart::session(Auth::guard('mypanel')->user()->id)->getContent();
                    // now the product to be added on cart
                    for ($i = 0; $i < count($this->product_id_array); $i++) {

                        foreach ($this->data_product as $key => $value) {
                            if ($this->product_id_array[$i] == $key) {
                                // idea here is to update $salecondition.value (maybe.)
                                $this->item_price = $value->price;
                                $this->product = array(
                                    'price' => $value->price - ($find_coupon->rewordtype == 'Discount' ? ($find_coupon->amount_type == "Percentage" ? ($find_coupon->discount_amount * $this->item_price) / 100 : $find_coupon->discount_amount) : 0),
                                );
                                Cart::session(Auth::guard('mypanel')->user()->id)->update($value->id, $this->product);
                            }
                        }
                        $this->item_price = 0;
                    }
                }
            }

            //insert user_id and code to Coupon table
            $insert_coupon = [];
            $insert_coupon['user_id'] = Auth::guard('mypanel')->user()->id;
            $insert_coupon['coupon'] = $find_coupon->code;
            Coupon::create($insert_coupon);
            //update voucher table ugase limit
            $c_voucher = Voucher::find($find_coupon->id);
            $voucher_update = [];
            $voucher_update['useges_qty'] = $c_voucher->useges_qty + 1;
            $c_voucher->update($voucher_update);

            $this->message = "Great! Coupon code applied successfuly !";
        } else {
            $this->message = "Oops! Coupon code already used !";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*    public function checkout_store(Request $request)
    {
        $data = json_encode($request->all());
        //dd("here");
        if (Auth::guard('mypanel')->user()) {
            dd("in");
            $userID = Auth::guard('mypanel')->user()->id;
            $items = Cart::session($userID)->getContent();
        }
        

    }*/
}
