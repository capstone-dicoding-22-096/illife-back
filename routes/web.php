<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/vendor', function () {
    return view('vendor/index');
});
