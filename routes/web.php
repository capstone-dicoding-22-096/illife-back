<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('index');
});

Route::resource('vendor',VendorController::class);
Route::resource('customer',CustomerController::class);