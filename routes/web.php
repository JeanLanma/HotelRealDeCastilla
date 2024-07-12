<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Front.Home.index');
})->name('home');

Route::get('/hotel-real-de-castilla-colonial', function () {
    return view('Front.Colonial.Home.index');
})->name('home.colonial');