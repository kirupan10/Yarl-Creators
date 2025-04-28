<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function user_blogpage_view() // user blog view function
    {
        return view('user.blogpage');
    }

    public function blogview()
    {
        return view('user.blogview');
    }

    public function user_contact_view()
    {
        return view('user.contact'); // Redirects to the contact view

    }



    public function contact_store(Request $request) // user contact form details store function
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

    public function appointment_view() // user appointment view function
    {
        return view('user.appointment');
    }

    public function gallary_view(){  // user gallery view function
        return view('user.gallery');
    }

    public function mugprint_view(){ // user mug printing view function
        return view('user.mugprinting');
    }

    public function paintingframes_view(){ // user painting frames view function
        return view('user.paintingframes');
    }

    public function sketches_view(){ // user sketches view function
        return view('user.sketches');
    }

    public function showLogin() // user login view function
    {
        return view('auth.login'); // Redirects to the login view
    }

    public function service_view(){ // user service view function
        return view('user.service');
    }

    public function about_view(){ // user about view function
        return view('user.about');
    }
}
