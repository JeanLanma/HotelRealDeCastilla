<?php

namespace App\Http\Controllers\Booking;

use App\Services\Rengin\RenginService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectBookingController extends Controller
{
    public function GoToBookingEngine(Request $request)
    {
        $HotelID = $request->has('hotel') ? $request->hotel : 'colonial';
        return redirect(RenginService::getRenginBaseURL($HotelID));
    }
}
