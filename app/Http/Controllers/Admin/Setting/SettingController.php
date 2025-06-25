<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use App\Models\Currency;
use App\Models\PaymentMethod;
use App\Models\PaymentSetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function create()
    {
        // dd(sslcommerz_config()['isSandbox']);
        $data['setting'] = AppSetting::first();
        $data['currencies'] = Currency::all();
        return view("Admin.Setting.App.application", $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'site_title'               => 'required|string|max:255',
            'store_name'               => 'nullable|string|max:100',
            'address'                  => 'required|string',
            'email'                    => 'required|email|max:50',
            'phone'                    => 'required|string|max:200',
            'logo'                     => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'favicon'                  => 'nullable|image|mimes:png,jpg,jpeg,ico|max:1024',
            'timezone'                 => 'nullable|string|max:150',
            'date_format'              => 'nullable|string',
            'invoice_logo'             => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'vat'                      => 'nullable|numeric',
            'show_vat_number'          => 'nullable|boolean',
            'vat_number'               => 'nullable|string|max:50',
            'service_charge'           => 'nullable|numeric',
            'discount_type'            => 'nullable|string|max:50',
            'service_charge_type'      => 'nullable|string|max:50',
            'discount_rate'            => 'nullable|numeric',
            'country'                  => 'nullable|string|max:100',
            'google_map_embed_link'    => 'nullable|string|max:500',
            'latitude'                 => 'nullable|numeric',
            'longitude'                => 'nullable|numeric',
            'currency_id'              => 'nullable|integer',
            'language'                 => 'nullable|string|max:50',
            'site_alignment'           => 'nullable|string|max:50',
            'powered_by_text'          => 'nullable|string|max:255',
            'footer_text'              => 'nullable|string|max:255',
            // Social Media Links
            'facebook'                 => 'nullable|url|max:255',
            'twitter'                  => 'nullable|max:255',
            'linkedin'                 => 'nullable|max:255',
            'instagram'                => 'nullable|max:255',
            'youtube'                  => 'nullable|max:255',
            'tiktok'                   => 'nullable|max:255',
            // end Social Media Links
            'whatsapp_number'          => 'nullable|string|max:20',
            'refund_restriction'       => 'nullable|boolean',
            'refund_auto_approve'      => 'nullable|boolean',
            'refund_deduction_percent' => 'nullable|numeric',
            'inventory_type'           => 'nullable|string|max:50',
            'invoice_company'          => 'nullable|string|max:255',
            'invoice_email'            => 'nullable|email|max:255',
            // Add more validation rules as needed
        ]);

        foreach (['logo', 'favicon', 'invoice_logo'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/settings'), $filename);
                $validated[$field] = 'public/uploads/settings/' . $filename;
            }
        }

        AppSetting::updateOrCreate(['id' => $request->input('id')], $validated);

        return redirect()->back()->with('success', 'Settings saved successfully!');
    }
    public function createCurrency()
    {
        $data['currencies'] = Currency::latest()->get();
        return view('Admin.Setting.Currency.addEdit', $data);
    }

    public function storeCurrency(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:50',
            'icon'     => 'required|string|max:10',
            'position' => 'required|in:1,2',
            'rate'     => 'required|numeric|min:0',
        ]);
        // dd($validated);

        Currency::create($validated); // This must include title, icon, position, rate
        Session::flash('status', 'Currency added successfully!');
        return redirect()->route('madmin.currency.index')->with('success', 'Currency added successfully!');
    }

    public function indexCurrency()
    {
        $currencies = Currency::latest()->get();

        return view('Admin.Setting.Currency.index', compact('currencies'));
    }

    public function editCurrency($id)
    {
        $currency = Currency::findOrFail($id);
        $currencies = Currency::latest()->get();

        return view('Admin.Setting.Currency.addEdit', compact('currency', 'currencies'));
    }

    public function updateCurrency(Request $request, $id)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:50',
            'icon'     => 'required|string|max:10',
            'position' => 'required|in:1,2',
            'rate'     => 'required|numeric|min:0',
        ]);

        $currency = Currency::findOrFail($id);
        $currency->update($validated);
        Session::flash('status', 'Currency updated successfully!');
        return redirect()->route('madmin.currency.index')->with('success', 'Currency updated successfully!');
    }

    public function destroyCurrency($id)
    {
        Currency::findOrFail($id)->delete();
        Session::flash('status', 'Currency deleted successfully!');
        return redirect()->back();
    }

    public function indexPaymentMethod()
    {
        $methods = PaymentMethod::latest()->get();
        return view('Admin.Setting.Payment.method', compact('methods'));
    }
    public function createPaymentMethod()
    {
        $methods = PaymentMethod::latest()->get();
        return view('Admin.Setting.Payment.addEdit', compact('methods'));
    }
    public function storePaymentMethod(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:100',
            'is_web'    => 'required|in:1,2',
            'acc_coa_id' => 'nullable|numeric',
            'is_active' => 'required|in:1,2',
        ]);

        PaymentMethod::create($request->all());

        Session::flash('status', 'Payment method added successfully.');
        return redirect()->back();
    }

    public function editPaymentMethod($id)
    {
        $edit = PaymentMethod::findOrFail($id);
        $methods = PaymentMethod::latest()->get();
        return view('Admin.Setting.Payment.addEdit', compact('methods', 'edit'));
    }

    public function updatePaymentMethod(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required|string|max:100',
            'is_web'    => 'required|in:1,2',
            'acc_coa_id' => 'nullable|numeric',
            'is_active' => 'required|in:1,2',
        ]);

        PaymentMethod::findOrFail($id)->update($request->all());
        Session::flash('status', 'Payment method updated successfully!');
        return redirect()->route('madmin.paymentmethod.create');
    }

    public function indexPaymentSetup()
    {
        $setups = PaymentSetup::with('paymentMethod')->latest()->get();
        $methods = PaymentMethod::where('is_active', 1)->get();
        return view('Admin.Setting.Payment.setup', compact('setups', 'methods'));
    }
    public function createPaymentSetup()
    {
        $data['setups'] = PaymentSetup::with('paymentMethod')->latest()->get();
        $data['methods'] = PaymentMethod::where('is_active', 1)->get();
        $data['currencies'] = Currency::all();
        return view('Admin.Setting.Payment.addEditSetup', $data);
    }

    public function storePaymentSetup(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'payment_method_id' => 'required|exists:cs_payment_methods,id',
            'merchant_id'       => 'nullable|string|max:255',
            'password'          => 'required|string|max:120',
            'email'             => 'required|email|max:100',
            'currency_id'       => 'nullable|numeric',
            'is_live'           => 'required|in:0,1',
            'api_code'          => 'nullable|string|max:25',
            'api_key'           => 'nullable|string|max:300',
            'api_endpoint'      => 'nullable|string|max:200',
            'api_user_scret'    => 'nullable|string|max:300',
            'is_active'         => 'required|in:1,2',
        ]);

        PaymentSetup::create($request->all());
        Session::flash('status', 'Payment setup saved successfully!');
        return redirect()->back();
    }

    public function destroyPaymentMethod($id)
    {
        PaymentMethod::findOrFail($id)->delete();
        Session::flash('status', 'Payment method deleted successfully!');
        return redirect()->back();
    }

    public function editPaymentSetup($id)
    {
        $edit = PaymentSetup::findOrFail($id);
        $data['setups'] = PaymentSetup::with('paymentMethod')->latest()->get();
        $data['methods'] = PaymentMethod::where('is_active', 1)->get();
        $data['currencies'] = Currency::all();
        return view('Admin.Setting.Payment.addEditSetup', $data);
    }

    public function updatePaymentSetup(Request $request, $id)
    {
        $request->validate([
            'payment_method_id' => 'required|exists:payment_methods,id',
            'marchantid'        => 'nullable|string|max:255',
            'password'          => 'required|string|max:120',
            'email'             => 'required|email|max:100',
            'currency_id'       => 'nullable|numeric',
            'is_live'           => 'required|in:0,1',
            'api_code'          => 'nullable|string|max:25',
            'api_key'           => 'nullable|string|max:300',
            'api_endpoint'      => 'nullable|string|max:200',
            'api_user_scret'    => 'nullable|string|max:300',
            'is_active'         => 'required|in:1,2',
        ]);

        PaymentSetup::findOrFail($id)->update($request->all());
        Session::flash('status', 'Payment setup updated successfully!');
        return redirect()->route('madmin.paymentsetup.create')->with('success', 'Payment setup updated.');
    }

    public function destroyPaymentSetup($id)
    {
        PaymentSetup::findOrFail($id)->delete();
        Session::flash('status', 'Payment setup deleted successfully!');
        return redirect()->back();
    }

    public function smsConfig()
    {
        $sms = DB::table('cs_sms_configs')->first();
        return view('Admin.Setting.sms.index', compact('sms'));
    }

    public function smsConfigStore(Request $request)
    {
        $validated = $request->validate([
            'provider'    => 'required|string|max:100',
            'username'    => 'required|string|max:100',
            'password'    => 'required|string|max:100',
            'phone'       => 'nullable|string|max:20',
            'sender_name' => 'nullable|string|max:100',
            'is_invoice'  => 'required|in:0,1',
            'is_receive'  => 'required|in:0,1',
        ]);

        DB::table('cs_sms_configs')->updateOrInsert(['id' => 1], $validated);
        Session::flash('status', 'SMS configuration updated successfully!');
        return back()->with('success', 'SMS configuration updated successfully!');
    }

    public function mailConfig()
    {
        $mail = DB::table('cs_mail_configs')->first();
        return view('Admin.Setting.mail.index', compact('mail'));
    }

    public function mailConfigStore(Request $request)
    {
        $validated = $request->validate([
            'protocol'     => 'required|string|max:100',
            'smtp_host'    => 'required|string|max:100',
            'smtp_port'    => 'required|string|max:100',
            'smtp_user'    => 'required|string|max:100',
            'smtp_pass'    => 'required|string|max:100',
            'mail_type'    => 'required|string|max:100',
            'is_invoice'   => 'nullable|in:0,1',
            'is_purchase'  => 'nullable|in:0,1',
            'is_receive'   => 'nullable|in:0,1',
            'is_payment'   => 'nullable|in:0,1',
            'is_active'    => 'nullable|in:0,1',
        ]);

        DB::table('cs_mail_configs')->updateOrInsert(['id' => 1], $validated);
        Session::flash('status', 'Mail configuration updated successfully!');
        return back();
    }
}
