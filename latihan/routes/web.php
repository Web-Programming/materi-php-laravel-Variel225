<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return view('about');
});

Route::get('/h', function () {
    return view('home');
});
