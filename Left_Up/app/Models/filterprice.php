<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filterprice extends Model
{
    use HasFactory;

    public function filter(){
        return $this->belongsTo(filter::class);
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function bills(){
        return $this->belongsToMany(Bill::class);
    }
}