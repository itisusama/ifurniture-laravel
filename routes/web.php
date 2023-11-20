<?php

use Illuminate\Support\Facades\Route;

// Creating Views
Route::view('/', 'home')->name('home');
Route::view('/beds', 'beds')->name('beds');
