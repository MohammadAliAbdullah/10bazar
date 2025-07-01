<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cs_cities';
    protected $guarded = [];

    // state
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
