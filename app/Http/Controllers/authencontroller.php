<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class authencontroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
}
