<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historicalEvent extends Model
{
    protected $fillable = [
        'img_url', 'name', 'description',
        'date', 'popularity', 'country', 'coordinates',
    ];
}
