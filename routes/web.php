<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Front.Home.index');
});
