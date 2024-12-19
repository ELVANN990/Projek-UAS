<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Likelihood extends Model
{
    protected $fillable = [
        'rating',
        'description',
        'probability'
    ];
}



