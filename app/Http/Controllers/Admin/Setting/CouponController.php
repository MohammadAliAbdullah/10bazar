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
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:madmin');
    }

    public function couponTypeList()
    {
        $data['couponTypes'] = DB::table('cs_coupon_types')->get();
        return view("Admin.Setting.coupon.couponTypeList", $data);
    }

    public function couponTypeAddOrEdit($id = null)
    {
        $data['couponType'] = null;
        if ($id) {
            $data['couponType'] = DB::table('cs_coupon_types')->find($id);
        }
        return view("Admin.Setting.coupon.couponTypeAddEdit", $data);
    }

    public function couponTypeStoreOrUpdate(Request $request, $id = null)
    {
        $rules = ['name' => 'required|string|max:250'];
        $data = $request->validate($rules);

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        if ($id) {
            DB::table('cs_coupon_types')->where('id', $id)->update($data);
            Session::flash('success', 'Coupon type updated successfully');
        } else {
            DB::table('cs_coupon_types')->insert($data);
            Session::flash('success', 'Coupon type created successfully');
        }

        return redirect()->route('admin.coupon.type.list');
    }
    
    public function couponTypeDelete(Request $request)
    {
        $couponTypeId = $request->id;
        DB::table('cs_coupon_types')->where('id', $couponTypeId)->delete();
        Session::flash('success', 'Coupon type deleted successfully');
        return redirect()->back();
    }
    public function couponTypeStatus(Request $request)
    {
        $couponTypeId = $request->id;
        $status = $request->status;
        DB::table('cs_coupon_types')->where('id', $couponTypeId)->update(['is_active' => $status]);
        Session::flash('success', 'Coupon type status updated successfully');
        return redirect()->back();
    }

    public function couponList()
    {
        $data['coupons'] = DB::table('cs_coupons')
            ->leftJoin('cs_coupon_types', 'cs_coupon_types.id', '=', 'cs_coupons.coupon_type_id')
            ->select('cs_coupons.*', 'cs_coupon_types.name as type_name')
            ->get();

        return view("Admin.Setting.coupon.couponList", $data);
    }

    public function couponAddOrEdit($id = null)
    {
        $data['coupon'] = null;
        $data['types'] = DB::table('cs_coupon_types')->where('is_active', 1)->get();

        if ($id) {
            $data['coupon'] = DB::table('cs_coupons')->find($id);
        }

        return view("Admin.Setting.coupon.couponAddEdit", $data);
    }

    public function couponStoreOrUpdate(Request $request, $id = null)
    {
        $rules = [
            'coupon_code' => 'required|max:250|unique:cs_coupons,coupon_code,' . ($id ?? 'NULL') . ',id',
            'discount_percent' => 'required|numeric',
            'qty' => 'required|integer',
            'usedQty' => 'required|integer',
            'date_from' => 'required|date',
            'date_to' => 'required|date|after_or_equal:date_from',
            'coupon_type_id' => 'required|integer',
        ];
        $data = $request->validate($rules);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        if ($id) {
            DB::table('cs_coupons')->where('id', $id)->update($data);
            Session::flash('success', 'Coupon updated successfully');
        } else {
            DB::table('cs_coupons')->insert($data);
            Session::flash('success', 'Coupon created successfully');
        }

        return redirect()->route('admin.coupon.list');
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
}
