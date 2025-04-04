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
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            Contact::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully!'
            ], 200, [], JSON_PRETTY_PRINT);
        }
    }
