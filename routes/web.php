<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "home");

Route::view("/about", "about");

Route::get("/create", function () {
    return view('create');
});


