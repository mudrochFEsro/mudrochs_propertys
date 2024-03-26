<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [ListingController::class, 'index']);
Route::resource('/', ListingController::class);
Route::resource('/listing', ListingController::class);

