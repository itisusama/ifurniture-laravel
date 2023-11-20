<?php

use Illuminate\Support\Facades\Route;

// Creating Views
Route::view('/', 'home')->name('home');
Route::view('/beds', 'beds')->name('beds');
Route::view('/beds', 'beds')->name('beds');
Route::view('/productdetails', 'productdetails')->name('productdetails');
Route::view('/commpany', 'company')->name('company');
Route::view('/contactus', 'contactus')->name('contactus');
Route::view('/faq', 'faq')->name('faq');
Route::view('/help', 'help')->name('help');
Route::view('/returnpolicy', 'returnpolicy')->name('returnpolicy');