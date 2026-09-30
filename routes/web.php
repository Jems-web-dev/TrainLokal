<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content');
})->name('home');

Route::get('/routes', function () {
    return view('routes');
})->name('routes');

Route::get('/bookings', function () {
    return view('bookings');
})->name('bookings');

Route::get('/offers', function () {
    return view('offers');
})->name('offers');

Route::get('/support', function () {
    return view('support');
})->name('support');
