<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/challenge', [GreetingController::class, 'index']);