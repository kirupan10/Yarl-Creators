<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller{



    public function booking_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        $bookings = Booking::all();
    return view('admin.booking_management', compact('bookings'));

    }

    public function user_booking_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        return view('user.booking', compact('user'));
    }

    public function booking_event_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        return view('user.booking_event', compact('user'));
    }

    public function store(Request $request)
{
    $request->validate([
        'service' => 'required|string',
        'date' => 'required|date',
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'message' => 'nullable|string',
        'package' => 'nullable|string',
    ]);

    Booking::create([
        'profile' => $request->email, // Or another field if you have a profile concept
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message,
        'name' => $request->name,
        'service' => $request->service,
        'package' => $request->package ?? 'N/A',
        'date' => $request->date,
        'status' => 'Pending',
        'payment' => 'Event Day', // Assuming this is a fixed value

    ]);

    return redirect()->route('booking-history')->with('success', 'Booking submitted successfully!');
}

public function checkout_view()
{
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('user.checkout', compact('user'));
}

public function user_booking_history()
{
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    $bookings = Booking::latest()->get(); // Fetch all bookings
        return view('user.booking_history', compact('bookings'));

}


}
