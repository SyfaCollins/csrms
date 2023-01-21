<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Suspect;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('dashboard',[
            'cases'=>Cases::all(),
            'suspects'=>Suspect::all()
        ]);
    }
}
