<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    protected $table = 'pools';
    protected $fillable = [
        'title',
        'line',
        'images',
        'model',
        'description',
        'measurement',
        'measurement_price',
    ];
}
