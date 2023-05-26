<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oilcar extends Model
{
    use HasFactory;
    public function bill(){
        return $this->hasOne(Bill::class);
    }
}
