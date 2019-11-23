<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['order', 'location_name', 'detail', 'image', 'lat', 'lon'];
}
