<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/create", function () {
    return view('create');
});

Route::get("/about", function () {
    return view('about');
});
