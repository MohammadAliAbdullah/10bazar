<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ThemeSetting;
use Illuminate\Support\Facades\Session;

class ThemeSettingController extends Controller
{
    public function edit()
    {
        $theme = ThemeSetting::first();
        return view('admin.Setting.themes.theme_settings', compact('theme'));
    }

    public function update(Request $request)
    {
        $theme = ThemeSetting::first();
        $theme->update($request->only([
            'topbar_bg',
            'topbar_text',
            'navbar_bg',
            'navbar_text',
            'button_bg',
            'button_hover',
            'button_border',
            'button_text',
            'pagination_bg',
            'pagination_text',
            'cart_bg',
            'cart_border',
            'cart_text'
        ]));
        Session::flash('status', 'Themes Design updated successfully!');
        return redirect()->back()->with('success', 'Theme updated successfully!');
    }
}
