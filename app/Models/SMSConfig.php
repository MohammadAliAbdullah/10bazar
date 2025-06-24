<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMSConfig extends Model
{
    use HasFactory;

    protected $table = 'cs_sms_configs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'provider', 'username', 'password', 'phone', 'sender_name',
        'is_invoice', 'is_purchase', 'is_receive', 'is_payment', 'is_active'
    ];
}
