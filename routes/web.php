<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "home");

Route::get("/create", function () {
    return view('create');
});


