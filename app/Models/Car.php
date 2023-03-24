<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'make',
        'model',
        'body',
        'engine',
        'engine_size',
        'power',
        'fuel',
        'drive',
        'gearbox',
        'year',
        'mileage',
        'color',
        'plate',
        'VIN',
        'price',
        'used',
    ];

}
