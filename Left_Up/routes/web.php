<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CylinderController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FilterPriceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ModeelController;
use App\Http\Controllers\OilController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::prefix('/user')->middleware('guest:user')->group(function(){
//     Route::get('/login' , [UserAuthController::class , 'showLoginUser'] )->name('view.login');
// });
Route::get('/' , [UserAuthController::class , 'showLoginUser'] )->name('viewUser.login');
Route::post('front/login' , [UserAuthController::class , 'loginUser']);

//  middleware('guest:admin')
Route::prefix('cms/')->group(function(){
    Route::get('admin/login' , [UserAuthController::class , 'showLogin'] )->name('view.login');
    Route::post('admin/login' , [UserAuthController::class , 'login']);
});

Route::prefix('cms/')->middleware('auth:admin')->group(function(){
    Route::get('admin/logout' , [UserAuthController::class , 'logout'] )->name('view.test');
});
// middleware('auth:admin')->
Route::prefix('cms/admin/')->group(function(){
    Route::view('' , 'cms.parent')->name('cms.parent');
    Route::view('temp' , 'cms.temp');

    Route::resource('admins' , AdminController::class);
    Route::post('update-admins/{id}' , [AdminController::class , 'update'])->name('update-admins');

    Route::resource('oils' , OilController::class);
    Route::post('update-oils/{id}' , [OilController::class , 'update'])->name('update-admins');

    Route::resource('brands' , BrandController::class);
    Route::post('update-brands/{id}' , [BrandController::class , 'update'])->name('update-brands');

    Route::resource('modeels' , ModeelController::class);
    Route::post('update-modeels/{id}' , [ModeelController::class , 'update'])->name('update-modeels');

     Route::resource('cylinders' , CylinderController::class);
     Route::post('update-cylinders/{id}' , [CylinderController::class , 'update'])->name('update-cylinders');

     Route::resource('years' , YearController::class);
    Route::post('update-years/{id}' , [YearController::class , 'update'])->name('update-years');

    Route::resource('cars' , CarController::class);
    Route::post('update-cars/{id}' , [CarController::class , 'update'])->name('update-cars');

    Route::resource('times' , TimeController::class);
    Route::post('update-times/{id}' , [TimeController::class , 'update'])->name('update-times');

    Route::resource('filters' , FilterController::class);
    Route::post('update-filters/{id}' , [FilterController::class , 'update'])->name('update-filters');
    Route::resource('users' , UserController::class);
    // Route::post('update-users/{id}' , [UserController::class , 'update'])->name('update-users');

     Route::resource('filterprices' , FilterPriceController::class);
    Route::post('update-filterprices/{id}' , [FilterPriceController::class , 'update'])->name('update-filterprices');

    // Route::resource('bookings' , BookingController::class);
    Route::resource('bookings' , BookingController::class);
    Route::get('bookings/{id}' , [BookingController::class , 'edit']);
    Route::get('bookk' , [BookingController::class , 'indexToday'])->name('index.Today');

    Route::post('update-bookings/{id}' , [BookingController::class , 'update'])->name('update-admins');
    Route::get('/index/bookings/{id}', [BookingController::class, 'indexArticle'])->name('indexBooking');

    // Route::get('locations', [LocationController::class, 'index']);

    Route::resource('locations' , LocationController::class);
    Route::post('update-times/{id}' , [LocationController::class , 'update'])->name('update-times');
});



// Route::prefix('/')->middleware('guest:user')->group(function(){
    // Route::get('user/login' , [UserAuthController::class , 'showLoginUser'] )->name('view.login');
// });
// middleware('auth:user')->
//

Route::prefix('front/')->middleware('guest:user,admin')->group(function(){
    Route::get('register',[HomeController::class,'register'])->name('website.register');
    Route::get('users', [UserController::class, 'create'])->name('users_create');
    Route::post('users', [UserController::class, 'store'])->name('users_store');

});

Route::prefix('front/user')->middleware('auth:user')->group(function(){
    Route::get('',[HomeController::class,'home'])->name('website.index');

    // Route::resource('/users' , UserController::class);


    Route::get('/bookings', [BookingController::class, 'create'])->name('book_create');
    Route::post('/book_store', [BookingController::class, 'store'])->name('book_store');
    Route::post('/book_store_next', [BookingController::class, 'store_next'])->name('book_store_next');

    Route::get('/myCar',[HomeController::class,'myCar'])->name('website.langEn.myCar');
    Route::get('/carDetails',[HomeController::class,'carDetails'])->name('website.langEn.carDetails');


    // Route::get('/create/bookings/{id}', [BookingController::class, 'createArticle'])->name('createBooking');

    // Route::post('update-users/{id}' , [UserController::class , 'update'])->name('update-users');
    // Route::get('index',[HomeController::class,'home'])->name('website.index');

    Route::get('/oil', [HomeController::class, 'oil'])->name('website.langEn.oil');
    Route::get('/myBooking',[HomeController::class,'myBooking'])->name('website.langEn.myBooking');

    Route::get('/bill', [HomeController::class, 'bill'])->name('website.langEn.bill');
    Route::post('',[HomeController::class,'storeBill'])->name('storeBill');
    Route::get('/myCarDetails/{id}', [HomeController::class, 'myCarDetails'])->name('website.langEn.myCarDetails');



});
