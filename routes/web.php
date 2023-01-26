<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuspectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\RegisteredUserController;


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

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/dashboard',[DashboardController::class,'index'])->name('home.dashboard');
Route::get('/suspects',[HomeController::class,'suspects'])->name('home.suspects');
Route::get('/reports',[HomeController::class,'reports'])->name('home.reports');
Route::get('/login',[LoginController::class,'login'])->name('login');

Route::post('/login',[LoginController::class,'access'])->name('login');


Route::resource('cases' ,CaseController::class);


Route::get('/register' ,[RegisterController::class,'index'])->name('register');
Route::post('/register' ,[RegisterController::class, 'store']);

Route::resource('suspects' ,SuspectsController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
