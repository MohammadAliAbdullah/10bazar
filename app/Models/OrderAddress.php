<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'name',
        'phone',
        'state_id',
        'city_id',
        'area_id',
        'city',
        'area',
        'address',
        'primary'
    ];

    // state id 
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    // city id 
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
