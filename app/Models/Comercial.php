<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercial extends Model
{
    protected $table = "comercials";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'benefit'];
    protected $casts = [
        'benefit' => 'float'
    ];
    protected $attributes = [
        'benefit' => 50,
    ];
}
