<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailConfig extends Model
{
    use HasFactory;

    protected $table = 'cs_mail_configs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'protocol', 'smtp_host', 'smtp_port', 'smtp_user', 'smtp_pass',
        'mail_type', 'cc', 'bcc', 'is_invoice', 'is_purchase', 'is_receive', 'is_payment', 'is_active'
    ];
}
