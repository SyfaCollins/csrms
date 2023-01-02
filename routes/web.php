<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/case', function () {
    return view('case');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/officers', function () {
    return view('officers');
});

Route::get('/policeStations', function () {
    return view('policeStations');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/suspects', function () {
    return view('suspects');
});