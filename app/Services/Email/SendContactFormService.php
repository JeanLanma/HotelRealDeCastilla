<?php

namespace App\Services\Email;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class SendContactFormService
{
    public static function send($data)
    {
        Mail::to(self::GetAdministrativeEmails())->send(new ContactEmail($data));
    }

    public static function GetAdministrativeEmails()
    {
        return ['desarrollo.software@pcbttroniks.com', 'reservaciones@hotelrealdecastilla.com.mx'];
    }
}