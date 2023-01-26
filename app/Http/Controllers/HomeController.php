<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        return view('layouts.layout
        ');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function suspects(){
        return view('suspects');
    }

    public function reports(){
        return view('reports');
    }

}
