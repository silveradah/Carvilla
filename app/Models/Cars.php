<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    /** @use HasFactory<\Database\Factories\CarsFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'year', 'transmission', 'body_type', 'make', 
        'condition', 'model', 'price', 'description', 
        'speed', 'engine', 'photo'
    ];
}
