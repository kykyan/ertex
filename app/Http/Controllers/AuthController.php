<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
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
