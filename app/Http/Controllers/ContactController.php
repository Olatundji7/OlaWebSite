<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
class ContactController extends Controller
{
 

public function send(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Enregistrer dans la base de données
    Message::create($data);

    return back()->with('success', 'Message enregistré avec succès !');
}


}
