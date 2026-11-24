<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->named('home');

Route::get('/contact', function () {
    return view('contact');
})->named('contact');

Route::get('/about', function () {
    return view('about');
})->named('about');