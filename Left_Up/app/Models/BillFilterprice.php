<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillFilterprice extends Model
{
    use HasFactory;
    public $table = 'bill_filterprice';

    public function bill(){
        return $this->hasMany(Bill::class);
    }
    public function filterprices(){
        return $this->hasMany(filterprice::class);
    }
}
