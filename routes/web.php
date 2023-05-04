<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/route::get('index',[HomeController::class,'index'])->name('index');
    route::get('/about',[HomeController::class,'about'])->name('about');
        route::get('/contact',[HomeController::class,'contact'])->name('contact');
        route::get('/admin',[admincontroller::class,'index'])->name('admin.indexA');

        route::get('/login',function(){
            return view('auth.login');
            })->name('login');
route::get('/register', function () {
    return view('auth.signup');
})->name('signup');






