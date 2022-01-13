<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ItineraryController;

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
//前台
Route::get('/',[FrontController::class,'itinerary']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

//後台
Route::prefix('/admin')->group(function (){
    //相關行程
    Route::prefix('/itinerary')->group(function (){
        //後臺列表頁
        Route::get('/',[ItineraryController::class,'index']);
    });
});
