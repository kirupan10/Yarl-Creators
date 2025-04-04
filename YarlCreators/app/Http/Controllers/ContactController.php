<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Handle the form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function show(){
        return view('contact');

     }

     
    public function store(Request $request)
    {

        // Validate incoming request
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Store the contact message in the database
        $contact = Contact::create([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Optional: Send an email notification to the admin (you can modify this logic as needed)
        Mail::to('admin@example.com')->send(new ContactMail($contact));

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
