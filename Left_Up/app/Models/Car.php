<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function modeel(){
        return $this->belongsTo(Modeel::class);
    }
    public function year(){
        return $this->belongsTo(Year::class);
    }
    public function cylinder(){
        return $this->belongsTo(Cylinder::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function filters(){
        return $this->hasMany(filter::class);
    }

}