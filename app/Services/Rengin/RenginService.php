<?php

namespace App\Services\Rengin;

class RenginService
{
    public static function getRenginBaseURL($hotelID = 'colonial')
    {
        return config('app.rengin.'.$hotelID.'_url');
    }
}