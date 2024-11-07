<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function ColonialHome()
    {
        return view('Front.Colonial.Home.index');
    }
    public function ColonialRooms()
    {
        return view('Front.Colonial.Rooms.index');
    }
}
