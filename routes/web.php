<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/aku', function () {
    return view('login');
});

Route::get('/aku2', function () {
    return view('index');
});

