<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

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

Route::get('registration',[profileController::class,'index']);
Route::post('registration',[profileController::class,'store']);

Route::get('login',[profileController::class,'login']);
Route::post('login',[profileController::class,'logincheck']);

Route::get('profile',[profileController::class,'profile']);
Route::get('editprofile/{id}',[profileController::class,'editprofile']);
Route::post('editprofile',[profileController::class,'updateprofile']);