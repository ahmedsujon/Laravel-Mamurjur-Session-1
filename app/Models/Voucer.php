<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucer extends Model
{
    protected $fillable = [
        'name', 'discount', 'status',
    ];
}
