<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sells_manAPIController;
use App\Http\Controllers\delivarymanAPIController;
use App\Http\Controllers\LoginController;
use App\Mail\welcomeMail;
// use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//For SELLS MAN
Route::post('/sells_manCreate',[sells_manAPIController::class,'create']);

Route::get('/sells_man/list', [sells_manAPIController::class, 'list']);

//For DELIVARY MAN
Route::post('/delivarymanCreate',[delivarymanAPIController::class,'create']);

Route::get('/delivarymanList', [delivarymanAPIController::class, 'list']);

Route::get('/email',function(){


Mail::to('codingwithaz@gmail.com')->send(new welcomeMail());

    return new welcomeMail();

});

//log in api
Route::post('/login',[LoginController::class,'loginSubmit']);