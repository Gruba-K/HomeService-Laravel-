<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModelController;

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

Route::get('/',[HomeController::class,'home']);
Route::get('about',[HomeController::class,'about']);
Route::get('adminlogin',[HomeController::class,'adminlogin']);
Route::get('customerlogin',[HomeController::class,'customerlogin']);
Route::get('customersignup',[HomeController::class,'customersignup']);
Route::get('category',[HomeController::class,'category']);
Route::get('Carpentar',[HomeController::class,'Carpentar']);
Route::get('ac',[HomeController::class,'ac']);
Route::get('plumber',[HomeController::class,'plumber']);
Route::get('Applience',[HomeController::class,'Applience']);
Route::get('ro',[HomeController::class,'ro']);
Route::get('movers',[HomeController::class,'movers']);
Route::get('bookwork',[HomeController::class,'bookwork']);
Route::get('Painter',[HomeController::class,'Painter']);
Route::get('pestcontrol',[HomeController::class,'pestcontrol']);
Route::get('drilling',[HomeController::class,'drilling']);
Route::get('tubelight',[HomeController::class,'tubelight']);
Route::get('book1',[HomeController::class,'book1']);
Route::get('adcuslist',[ModelController::class,'adcuslist']);
Route::get('end',[HomeController::class,'end']);
Route::get('contact',[HomeController::class,'contact']);
// crud

Route::post('customerlogin',[ModelController::class,'customerlogin']);
Route::post('adminlogin',[ModelController::class,'adminlogin']);
Route::post('cussignup',[ModelController::class,'cussignup']);
Route::post('bookreq',[ModelController::class,'bookreq']);
// adminop
Route::get('accept/{id}',[ModelController::class,'accept']);
Route::get('decline/{id}',[ModelController::class,'decline']);
//email
Auth::routes(['verify'=>true]); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
