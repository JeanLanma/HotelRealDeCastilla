<?php

use App\Http\Controllers\Admin\Contact\ContactController;
use App\Http\Controllers\Booking\DirectBookingController;
use App\Http\Controllers\Hotels\HotelColonialController;
use App\Http\Controllers\Hotels\HotelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Front.Landing.Home.index');
})->name('home');

Route::get('contact',[ContactController::class, 'index'])->name('contact');
Route::post('contact',[ContactController::class, 'store'])->name('contact.store');
Route::get('show-email',[ContactController::class, 'showEmail'])->name('show.email');

Route::get('/hotel-real-de-castilla-colonial', [HotelController::class, 'ColonialHome'])->name('home.colonial');

Route::get('/colonial/servicios', [HotelColonialController::class, 'services'])->name('hotel.colonial.services');

Route::get('/hotel-real-de-castilla-colonial/rooms', [HotelController::class, 'ColonialRooms'])->name('hotel.colonial.rooms');
Route::get('/hotel-real-de-castilla-nuovo/rooms', [HotelController::class, 'ColonialRooms'])->name('hotel.nuovo.rooms');

Route::get('/hotel-real-de-castilla-nuovo', function () {
    return view('Front.Nuovo.Home.index');
})->name('home.nuovo');

Route::get('/direct-booking', [DirectBookingController::class, 'GoToBookingEngine'])->name('direct.booking');