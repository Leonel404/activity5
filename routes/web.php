<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('registration', function () {
    return view('registration');
})->name('registration');
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');