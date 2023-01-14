<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuspectsController;


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



Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('home.dashboard');
Route::get('/suspects',[HomeController::class,'suspects'])->name('home.suspects');
Route::get('/reports',[HomeController::class,'reports'])->name('home.reports');

Route::resource('cases' ,CaseController::class);
Route::resource('suspects' ,SuspectsController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
