<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function access(Request $request){

        //validate data
        //sanitize data 
        $this->validate($request,
    [
        'email'=>'required|email',
        'password'=>'required'
    ]);

    if(!auth()->attempt($request->only('email','password'))){
        return back()->with('status', 'Invalid login details');
    };
        


        return redirect()->route('home.dashboard');
    }
}
