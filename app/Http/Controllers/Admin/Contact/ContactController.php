<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Services\Email\SendContactFormService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('Front.Landing.Contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        SendContactFormService::send($request->all());
        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function showEmail() {
        return view('emails.contact-email');
    }
}
