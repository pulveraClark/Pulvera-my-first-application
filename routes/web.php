<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

route::get('/about', function () {
    return view('about');
});
route::get('/contact', function () {
    return view('contact')  ;
});