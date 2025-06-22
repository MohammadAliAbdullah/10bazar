<?php

namespace App\Http\Controllers;

use App\Models\AppSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function create()
    {
        $setting = AppSetting::first();
        if ($setting) {
            return view("Admin.LogoFavs.application", compact("setting"));
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'site_title'  => 'nullable|string|max:255',
            'store_name'  => 'nullable|string|max:100',
            'address'     => 'nullable|string',
            'email'       => 'nullable|email|max:50',
            'phone'       => 'nullable|string|max:200',
            'splash_logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'logo'        => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'favicon'     => 'nullable|image|mimes:png,jpg,jpeg,ico|max:1024',
            'timezone'    => 'required|string|max:150',
            'date_format' => 'required|string',
        ]);

        foreach (['logo', 'splash_logo', 'favicon'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/settings'), $filename);
                $validated[$field] = 'uploads/settings/' . $filename;
            }
        }

        AppSetting::create($validated);
        return redirect()->back()->with('success', 'Settings saved successfully!');
    }

    public function edit($id)
    {
        $setting = AppSetting::findOrFail($id);
        return view('settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = AppSetting::findOrFail($id);

        $validated = $request->validate([
            'site_title' => 'nullable|string|max:255',
            'store_name' => 'nullable|string|max:100',
            'address' => 'nullable|string',
            'email' => 'nullable|email|max:50',
            'phone' => 'nullable|string|max:200',
            'splash_logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:1024',
            'timezone' => 'required|string|max:150',
            'date_format' => 'required|string',
        ]);

        foreach (['logo', 'splash_logo', 'favicon'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/settings'), $filename);
                $validated[$field] = 'uploads/settings/' + $filename;
            }
        }

        $setting->update($validated);
        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
