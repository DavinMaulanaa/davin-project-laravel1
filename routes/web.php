<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;


//Route::get('/', function () {
 //   return view('welcome');
//});


//Route::get('/aku', function () {
//    return view('login');
//});

//Route::get('/aku2', function () {
//    return view('index');+
//});

 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/login',[HomeController::class, 'login'])->name('login');
 Route::get('/about',[HomeController::class, 'about'])->name('about');
