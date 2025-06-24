<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;
    // table name
    protected $table = 'cs_settings';

    protected $fillable = [
        'site_title',
        'store_name',
        'address',
        'email',
        'phone',
        'logo',
        'splash_logo',
        'favicon',
        'vat',
        'show_vat_number',
        'vat_number',
        'service_charge',
        'discount_type',
        'service_charge_type',
        'discount_rate',
        'country',
        'google_map_embed_link',
        'latitude',
        'longitude',
        'currency_id',
        'language',
        'timezone',
        'date_format',
        'site_alignment',
        'powered_by_text',
        'footer_text',
        'whatsapp_number',
        'refund_restriction',
        'refund_auto_approve',
        'refund_deduction_percent',
        'inventory_type',
        'invoice_company',
        'invoice_email',
        'invoice_logo',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'tiktok'
    ];
}
