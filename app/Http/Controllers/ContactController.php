<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:filter|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        Mail::to('info@anderlechtse-ngo.be')->send(
            new ContactMail(
                senderName: $validated['name'],
                senderEmail: $validated['email'],
                subject: $validated['subject'],
                messageBody: $validated['message'],
            ),
        );

        return redirect()->route('contact')->with('success', 'Uw bericht is succesvol verzonden.');
    }
}
