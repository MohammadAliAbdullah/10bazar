<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeSetting extends Model
{
    protected $table = 'cs_theme_settings';
    protected $fillable = [
        'topbar_bg', 'topbar_text', 'navbar_bg', 'navbar_text',
        'button_bg', 'button_hover', 'button_border', 'button_text',
        'pagination_bg', 'pagination_text', 'cart_bg', 'cart_border', 'cart_text'
    ];
}