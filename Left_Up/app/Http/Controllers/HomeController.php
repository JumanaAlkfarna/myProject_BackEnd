<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Bill;
use App\Models\Time;
use App\Models\User;
use App\Models\Year;
use App\Models\Brand;
use App\Models\filter;
use App\Models\Modeel;
use App\Models\Oilcar;
use App\Models\Booking;
use App\Models\Cylinder;
use App\Models\filterprice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $users = User::all();
        return view('website.langEn.index' , compact('users'));
    }

    public function register(){
        return view('website.register');
    }

    public function storeBill(Request $request)
    {
           //  dd($request);

        if ($request->five_thousand != "") {

            $request->request->add(['oil_id' => $request->oil_id]);

        }
        if ($request->ten_thousand != "") {

            $request->request->add(['oil_id' => $request->oil_id1 - 100]);

        }

        $filtterIds = $request->filterprice;

        $request = $request->except('filters','_token');
//dd($request);
        $bill = Bill::create($request);

        $bill->filterprices()->sync($filtterIds);
        // dd($bill->filterprices);
        return view('website.langEn.bill' , compact('bill','filtterIds'));

    }


    public function myCar(){
        $bookings = Booking::where('status' ,'finish')->get();

        return view('website.langEn.myCar' , compact('bookings'));
    }

    public function carDetails(){
        // $brands = Brand::all();
        // $modeels = Modeel::all();
        // $years = Year::all();
        // $cylinders = Cylinder::all();
        $cars = Car::all();
        $times = Time::all();
        $bookings = Booking::all();


        return view('website.langEn.carDetails',compact('times','cars','bookings'));
    }
    public function myCarDetails($id){
        $times = Time::all();
            $car_id = $id;
        return view('website.langEn.myCarDetails' , compact('times','car_id') );
    }




    public function oil(){
        $oils = Oilcar::all();
        $oilTens = OilCar::all();
        $filterprices = filterprice::all();

        return view('website.langEn.oil' ,  compact('oils','oilTens','filterprices'));
    }

    public function myBooking(){
        $bookings = Booking::where('status' ,'wait')->get();
        return view('website.langEn.myBooking' ,  compact('bookings'));
    }

    public function bill(){
        return view('website.langEn.bill' );
    }
}