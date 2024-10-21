<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectBookingController extends Controller
{
    public function GoToBookingEngine()
    {
        return redirect()->route('contact');
    }
}
