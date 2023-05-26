<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [

        'QTY',
        'oil_id',
        'booking_id',

        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bookings(){
        return $this->hasOne(Booking::class);
    }
    public function filterprices(){
        return $this->belongsToMany(filterprice::class);
    }
    public function oil(){
        return $this->belongsTo(Oilcar::class);
    }
    public function billFilterprices(){
        return $this->belongsTo(BillFilterprice::class);
    }
    // public function Total()
    // {

    //     return Bill::sum(filterprices()->price);

    // }

}