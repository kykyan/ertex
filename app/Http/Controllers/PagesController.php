<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function informasi()
    {
        return view('user.info');
    }
}


