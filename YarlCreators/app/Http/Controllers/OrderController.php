<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        $orders = Order::all();
        return view('admin.order_management', compact('orders'));
    }

    public function store(Request $request)
    {
        try {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'street_address' => 'required|string',
            'city' => 'required|string',
            'state' => 'nullable|string',
            'country' => 'required|string',
            'zip' => 'required|string',
            'coupon' => 'nullable|string',
            'payment_method' => 'required|string',
            'item' => 'required|string', // should be JSON if multiple
            'total' => 'required|numeric|min:0'
        ]);

        Order::create($validated);

        return redirect()->back()->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
        return redirect()->back()->withErrors(['db_error' => 'Database error: ' . $e->getMessage()]);
    }
    }
}
