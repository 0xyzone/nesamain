<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NesaEvent extends Model
{
    protected $casts = [
        'games' => 'array'
    ];
}
