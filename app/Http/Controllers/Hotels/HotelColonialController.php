<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelColonialController extends Controller
{
    public function services()
    {
        return view('Front.Colonial.Services.index');
    }
}
