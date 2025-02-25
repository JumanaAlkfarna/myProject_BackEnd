<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ViewerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('cms/')->middleware('guest:admin,author')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'] )->name('view.login');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});

Route::prefix('cms/admin/')->middleware('auth:admin,author')->group(function(){
    Route::get('logout' , [UserAuthController::class , 'logout'] )->name('view.test');
});

Route::prefix('cms/admin/')->middleware('auth:admin,author')->group(function(){
    Route::view('' , 'cms.parent');
    Route::view('temp' , 'cms.temp');
    Route::view('index' , 'cms.country.index');
    Route::resource('countries' , CountryController::class);
    Route::post('update-countries/{id}' , [CountryController::class , 'update'])->name('update-countries');

    Route::resource('roles' , RoleController::class);
    Route::post('roles-update' , [RoleController::class , 'update']);
    Route::resource('permissions' , PermissionController::class);
    Route::post('permissions-update' , [PermissionController::class , 'update']);
    Route::resource('roles.permissions' , RolePermissionController::class);

    Route::resource('cities' , CityController::class);
    Route::post('update-cities/{id}' , [CityController::class , 'update'])->name('update-cities');

    Route::resource('admins' , AdminController::class);
    Route::post('update-admins/{id}' , [AdminController::class , 'update'])->name('update-admins');

    Route::resource('authors' , AuthorController::class);
    Route::post('update-authors/{id}' , [AuthorController::class , 'update'])->name('update-authors');

    Route::resource('categories' , CategoryController::class);
    Route::post('update-categories/{id}' , [CategoryController::class , 'update'])->name('update-categories');

    Route::resource('articles' , ArticleController::class);
    Route::post('update-articles/{id}' , [ArticleController::class , 'update'])->name('update-articles');
    Route::get('/create/articles/{id}', [ArticleController::class, 'createArticle'])->name('createArticle');
    Route::get('/index/articles/{id}', [ArticleController::class, 'indexArticle'])->name('indexArticle');

    Route::resource('viewers' , ViewerController::class);
    Route::post('update-viewers/{id}' , [ViewerController::class , 'update'])->name('update-viewers');

});

Route::prefix('front/')->group(function(){

    Route::get('home' , [HomeController::class , 'home'])->name('news.parent');
});