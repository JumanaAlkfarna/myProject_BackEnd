<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filter extends Model
{
    use HasFactory;
    public function filterprices(){
        return $this->hasMany(filterprice::class);
    }

    public function cars(){
        return $this->belongsToMany(Car::class);
    }

}