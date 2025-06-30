<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    protected $table = 'cs_shipping_methods';
    protected $guarded = [];

    public function shippingZone()
    {
        return $this->belongsTo(ShippingZone::class, 'shipping_zone_id');
    }
    public function shippingZoneName()
    {
        return $this->shippingZone ? $this->shippingZone->name : 'N/A';
    }
}
