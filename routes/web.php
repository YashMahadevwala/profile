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


Route::post('registration',[profileController::class,'store']);


Route::post('login',[profileController::class,'logincheck']);


Route::get('editprofile/{id}',[profileController::class,'editprofile']);
Route::post('editprofile',[profileController::class,'updateprofile']);

Route::get('logout',[profileController::class,'logout']);

// Route::group(['middleware' => ['authentic']],function(){
//     Route::get('profile',[profileController::class,'profile']);
// });

Route::group(['middleware' => ['authentic']], function(){
    Route::get('profile',[profileController::class,'profile']);
    Route::get('registration',[profileController::class,'index']);
    Route::get('login',[profileController::class,'login']);
});