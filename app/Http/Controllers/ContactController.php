<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only('name','email','message');

        // Envoi du mail
        Mail::to('tonemaildestinataire@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
