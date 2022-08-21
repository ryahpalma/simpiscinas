<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';
    protected $fillable = [
        'title',
        'image_mobile',
        'image_desktop',
        'pool_id',
        'position',
    ];
}
