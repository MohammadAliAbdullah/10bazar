<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    // table name
    protected $table = 'cs_currencies';
   protected $fillable = ['title', 'icon', 'position', 'rate'];

}
