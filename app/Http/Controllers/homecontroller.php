<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
}
