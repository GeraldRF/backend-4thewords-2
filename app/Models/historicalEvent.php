<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historicalEvent extends Model
{
    protected $fillable = [
        'img_url', 'name', 'description', 'history',
        'date', 'popularity', 'country', 'coordinates',
    ];
}
