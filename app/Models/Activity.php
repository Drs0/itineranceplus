<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = "activities";
    protected $guarded = ['id'];
    protected $cast = [
        'initial_price' => 'float',
        'child_price' => 'float',
    ];
    // protected $attributes = [
    //     'child_price' => 0,
    // ];
    // protected function setChildPriceAttribute($value)
    // {
    //     $initial_price = $this->attributes('initial_price');
    //     $child_price = $initial_price * 0.75;
    //     $this->attributes['child_price'] = $child_price;
    // }
}
