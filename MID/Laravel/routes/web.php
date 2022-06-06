<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PagesController;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\sells_manController;
use App\Http\Controllers\delivarymanController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\PieController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;


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

//Basic
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/about', [PagesController::class, 'about'])->name('about');


// Admin
//Route::get('/admin/adminWelcome', [PagesController::class,'adminWelcome'])->name('adminWelcome');

// //Admin login
// Route::get('/login',[LoginController::class,'login'])->name('login');
// Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
// Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Admin login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Admin dash
Route::get('/admin/adminWelcome', [PagesController::class,'adminWelcome'])->name('adminWelcome')->middleware('ValidAdmin');
Route::get('/signout',[adminController::class,'signout'])->name('signout');
//Log in 
// Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
//Route::get('/loginList', [LoginController::class, 'loginList'])->name('loginList');

//SellsMan
Route::get('/sells_manList', [sells_manController::class, 'sells_manList'])->name('sells_manList');
Route::get('/sells_manEdit/{id}/{name}',[sells_manController::class,'sells_manEdit']);
Route::post('/sells_manEdit',[sells_manController::class,'sells_manEditSubmitted'])->name('sells_manEdit');

Route::get('/sells_manDelete/{id}/{name}',[sells_manController::class,'sells_manDelete']);

Route::get('/sells_manCreate', [sells_manController::class, 'sells_manCreate'])->name('sells_manCreate');
Route::post('/sells_manCreate', [sells_manController::class, 'sells_manCreateSubmitted'])->name('sells_manCreate');

//Delivaryman
Route::get('delivaryman/delivarymanWelcome', [PagesController::class,'delivarymanWelcome'])->name('delivarymanWelcome');

Route::get('/delivarymanList', [delivarymanController::class, 'delivarymanList'])->name('delivarymanList');
Route::get('/delivarymanEdit/{id}/{name}',[delivarymanController::class,'delivarymanEdit']);
Route::post('/delivarymanEdit',[delivarymanController::class,'delivarymanEditSubmitted'])->name('delivarymanEdit');

Route::get('/delivarymanDelete/{id}/{name}',[delivarymanController::class,'delivarymanDelete']);

Route::get('/delivarymanCreate', [delivarymanController::class, 'delivarymanCreate'])->name('delivarymanCreate');
Route::post('/delivarymanCreate', [delivarymanController::class, 'delivarymanCreateSubmitted'])->name('delivarymanCreate');

Route::get('/delivarymanPie', [PieController::class, 'delivarymanPie'])->name('delivarymanPie');

//Order

Route::get('/orderList', [orderController::class, 'orderList'])->name('orderList');
Route::get('/orderEdit/{id}/{name}',[orderController::class,'orderEdit']);
Route::post('/orderEdit',[orderController::class,'orderEditSubmitted'])->name('orderEdit');

Route::get('/orderDelete/{id}/{name}',[orderController::class,'orderDelete']);

Route::get('/orderCreate', [orderController::class, 'orderCreate'])->name('orderCreate');
Route::post('/orderCreate', [orderController::class, 'ordercreateSubmitted'])->name('orderCreate');

//Sells Man
Route::get('sells_man/sells_manWelcome', [PagesController::class,'sells_manWelcome'])->name('sells_manWelcome');//->middleware('ValidAdmin');
// Route::get('/signout',[LoginController::class,'signout'])->name('signout');

// Route::get('login/delivarymanlogin',[delivarymanController::class,'delivarymanlogin'])->name('login.deliveryman');
// Route::post('login/delivarymanlogin',[delivarymanController::class,'delivarymanloginnSubmit'])->name('login');
// Route::get('/delivarymanlogin',[LoginController::class,'delivarymanlogout'])->name('logout');

//Product
//Route::get('product/delivarymanWelcome', [PagesController::class,'delivarymanWelcome'])->name('delivarymanWelcome');

Route::get('/productList', [productController::class, 'productList'])->name('productList');
Route::get('/productEdit/{id}/{name}',[productController::class,'productEdit']);
Route::post('/productEdit',[productController::class,'productSubmitted'])->name('productEdit');

Route::get('/productDelete/{id}/{name}',[productController::class,'productDelete']);

Route::get('/productCreate', [productController::class, 'productCreate'])->name('productCreate');
Route::post('/productCreate', [productController::class, 'productCreateSubmitted'])->name('productCreate');
