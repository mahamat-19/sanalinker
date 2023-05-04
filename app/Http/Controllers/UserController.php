<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function connect()
    {
        $register = DB::table('register')->get();
        dd($register);
        return view('auth.connect',['register'=>$register]);

}
}
