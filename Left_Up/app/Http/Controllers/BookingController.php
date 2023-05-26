<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Time;
use App\Models\User;
use App\Models\Oilcar;
use App\Models\Booking;
use App\Models\filterprice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::all();

        $bookings = Booking::orderBy('id', 'asc')->paginate(5);
        return response()->view(
            'cms.booking.index',
            compact('bookings', 'times')
        );
    }

    public function indexToday()
    {
        $bookings = Booking::wheredate(
            'date',
            '=',
            Carbon::today()
        )->paginate();

        return view('cms.booking.index', compact('bookings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function indexArticle($id)
    //  {
    //      //
    //      $users = User::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);
    //      return response()->view('cms.article.index', compact('articles','id'));
    //  }
    // public function createBooking($id)
    // {
    //     $users = User::all();
    //     $cars = Car::all();

    //     return response()->view('cms.booking.create' , compact('users','id','cars'));
    // }

    public function create()
    {
        $users = User::all();
        $cars = Car::all();
        $times = Time::all();

        return response()->view('website.carDetails', compact('users', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function showAvailableTimes($date, $location)
    {
        // First, get all the times available for the given date and location
        $times = Time::where('period', 'am')
            ->orWhere('period', 'pm')
            ->get();

        // Then, loop through each time to count the number of bookings made for it
        foreach ($times as $time) {
            $bookingsCount = Booking::where('time_id', $time->id)
                ->where('date', $date)
                ->where('location', $location)
                ->count();
            $time->bookingsCount = $bookingsCount;
        }

        return view('bookings.availability', [
            'date' => $date,
            'location' => $location,
            'times' => $times,
        ]);
    }

    public function store(Request $request)
    {
        $car_id = Car::first()
            ->where('brand_id', $request->brand_id)
            ->where('modeel_id', $request->model_id)
            ->where('cylinder_id', $request->cylinder_id)
            ->get();
        // dd($car_id[0]->id);

        $request->request->add(['car_id' => $car_id[0]->id]);
        // dd($request);

        $times = count(
            Booking::where('time_id', $request->time_id)
                ->where('date', $request->date)
                ->get()
        );

        // dd($times);
        if ($times > 1) {
            return response()->json(
                [
                    'icon' => 'success',
                    'title' => 'Choose another Time In That Day',
                ],
                200
            );
            return redirect()->back();
        }

        $validator = Validator($request->all(), []);

        if (!$validator->fails()) {
            $bookings = new Booking();

            $bookings->date = $request->get('date');
            $bookings->locationEn = $request->get('locationEn');
            $bookings->locationAr = $request->get('locationAr');
            $bookings->user_id = auth()->user()->id;
            $bookings->car_id = $request->get('car_id');
            $bookings->status = $request->get('status');
            $bookings->time_id = $request->get('time_id');

            $isSaved = $bookings->save();
            // return ['redirect' => route('website.oil')];
            $oils = Oilcar::all();
            $oilTens = OilCar::all();
            $filterprices = filterprice::where(
                'car_id',
                $request->get('car_id')
            )->get();

            $booking_id = $bookings->id;
            return view(
                'website.langEn.oil',
                compact('oils', 'oilTens', 'filterprices', 'booking_id')
            );
        }
    }

    public function store_next(Request $request)
    {
        $times = count(
            Booking::where('time_id', $request->time_id)
                ->where('date', $request->date)
                ->get()
        );

        // dd($times);
        if ($times > 1) {
            return response()->json(
                [
                    'icon' => 'success',
                    'title' => 'Choose another Time In That Day',
                ],
                200
            );
            return redirect()->back();
        }

        $validator = Validator($request->all(), []);

        if (!$validator->fails()) {
            $bookings = new Booking();

            $bookings->date = $request->get('date');
            $bookings->locationEn = $request->get('locationEn');
            $bookings->locationAr = $request->get('locationAr');
            $bookings->user_id = auth()->user()->id;
            $bookings->car_id = $request->get('car_id');
            $bookings->status = $request->get('status');
            $bookings->time_id = $request->get('time_id');

            $isSaved = $bookings->save();
            // return ['redirect' => route('website.oil')];
            $oils = Oilcar::all();
            $oilTens = OilCar::all();
            $filterprices = filterprice::where(
                'car_id',
                $request->get('car_id')
            )->get();

            $booking_id = $bookings->id;
            return view(
                'website.langEn.oil',
                compact('oils', 'oilTens', 'filterprices', 'booking_id')
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings = Booking::findOrFail($id);
        return response()->view('cms.booking.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), []);

        if (!$validator->fails()) {
            $bookings = Booking::findOrFail($id);

            $bookings->status = $request->get('status');

            $isUpdated = $bookings->save();
            return ['redirect' => route('bookings.index')];

            if ($isUpdated) {
                return response()->json(
                    ['icon' => 'success', 'title' => 'Created is Successfully'],
                    200
                );
            } else {
                return response()->json(
                    ['icon' => 'error', 'title' => 'Created is Failed'],
                    400
                );
            }
        } else {
            return response()->json(
                [
                    'icon' => 'error',
                    'title' => $validator->getMessageBag()->first(),
                ],
                400
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = Booking::destroy($id);
    }
}