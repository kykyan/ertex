<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        // if(Session::get('admin')){
        //     return redirect('/dashboard');
        // }else{
        //     return view('admin.login');
        // }
        return view('admin.login');
    }
    
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            // Session::put('admin',TRUE);
            return redirect('/dashboard');
        }
        return back()->with('alert','Email atau Password Salah!');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
