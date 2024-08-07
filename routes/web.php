<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



    Route::get('/greeting', function () {
        return view('index');
    });
 
    Route::get('/cart', function () {
        return view('cart');
    });
 
require __DIR__.'/auth.php';
