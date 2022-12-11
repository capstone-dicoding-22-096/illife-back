<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

Route::get('/', function () {
    return view('index');
});

Route::resource('vendor',VendorController::class);