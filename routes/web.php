<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Front.Home.index');
})->name('home');

Route::get('contact', function () {
    return view('Front.Landing.Contact.index');
})->name('contact');

Route::get('/hotel-real-de-castilla-colonial', function () {
    return view('Front.Colonial.Home.index');
})->name('home.colonial');

Route::get('/hotel-real-de-castilla-nuovo', function () {
    return view('Front.Nuovo.Home.index');
})->name('home.nuovo');