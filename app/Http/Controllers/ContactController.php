<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactMessage as ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save to the database
        $contact = ContactMessage::create($data);

        // Send email
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMessageMail($data));

        return back()->with('success', 'Je bericht werd succesvol verzonden.');
    }
}
