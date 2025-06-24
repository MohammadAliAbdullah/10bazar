<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use App\Models\SeoConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function create()
    {
        $data['setting'] = AppSetting::first();
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

    public function seoIndex()
    {
        $configs = SeoConfig::paginate(10);
        return view("Admin.Setting.seo.index", compact('configs'));
    }
}
