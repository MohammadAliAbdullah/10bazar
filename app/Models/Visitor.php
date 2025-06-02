<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';
    protected $fillable = [
        'ip',
        'country',
        'city',
        'browser',
        'platform',
        'device',
        'referer',
    ];

    protected $casts = [
        'ip' => 'string',
    ];
}
