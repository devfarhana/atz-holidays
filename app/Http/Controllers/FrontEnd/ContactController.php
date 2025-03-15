<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('frontend.contact', compact('contact'));
    }
    public function submit(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $submission = new ContactMessage();
        $submission->name = $validated['name'];
        $submission->email = $validated['email'];
        $submission->phone = $validated['phone'];
        $submission->subject = $validated['subject'];
        $submission->message = $validated['message'];
        $submission->save();

        // Send email
        Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        // Return response (redirect or JSON)
        return redirect()->back()->with('message', 'Your message has been sent!');
    }

}
