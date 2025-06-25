<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentSetup extends Model
{
    // table name
    protected $table = 'cs_payment_setups';
    protected $fillable = [
        'payment_method_id', 'merchant_id', 'password', 'email', 'currency_id',
        'is_live', 'api_code', 'api_key', 'api_endpoint', 'api_user_secret', 'is_active'
    ];

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}
