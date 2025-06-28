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

class CouponController extends Controller
{
    public function couponList()
    {
        $data['currencies'] = Currency::all();
        return view("Admin.Setting.coupon.couponList", $data);
    }
    public function couponAddOrEdit()
    {
        $data['currencies'] = Currency::all();
        return view("Admin.Setting.coupon.couponAddEdit", $data);
    }

    public function couponDelete(Request $request)
    {
        $couponId = $request->id;
        DB::table('cs_coupons')->where('id', $couponId)->delete();
        Session::flash('success', 'Coupon deleted successfully');
        return redirect()->back();
    }
    public function couponStatus(Request $request)
    {
        $couponId = $request->id;
        $status = $request->status;
        DB::table('cs_coupons')->where('id', $couponId)->update(['is_active' => $status]);
        Session::flash('success', 'Coupon status updated successfully');
        return redirect()->back();
    }
    public function couponStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:cs_coupons,code',
            'discount_type' => 'required|string',
            'discount_value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'is_active' => 'boolean',
        ]);

        DB::table('cs_coupons')->insert($data);
        Session::flash('success', 'Coupon created successfully');
        return redirect()->route('admin.coupon.list');
    }
    public function couponUpdate(Request $request, $id)
    {
        $data = $request->validate([
            'name'           => 'required|string|max:255',
            'code'           => 'required|string|max:50|unique:cs_coupons,code,' . $id,
            'discount_type'  => 'required|string',
            'discount_value' => 'required|numeric|min:0',
            'start_date'     => 'required|date',
            'end_date'       => 'required|date|after_or_equal:start_date',
            'is_active'      => 'boolean',
        ]);

        DB::table('cs_coupons')->where('id', $id)->update($data);
        Session::flash('success', 'Coupon updated successfully');
        return redirect()->route('admin.coupon.list');
    }
}
