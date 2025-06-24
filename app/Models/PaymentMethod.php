<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'cs_payment_methods';
    protected $fillable = [
        'title', 'is_web', 'acc_coa_id', 'is_active'
    ];
}
