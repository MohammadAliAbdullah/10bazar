<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingZoneLocation extends Model
{
    protected $table = 'cs_shipping_zone_locations';

    protected $fillable = [
        'shipping_zone_id',
        'state_id',
        'city_id',
        'is_default',
        'created_by',
        'updated_by',
    ];

    public function shippingZone()
    {
        return $this->belongsTo(ShippingZone::class, 'shipping_zone_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
