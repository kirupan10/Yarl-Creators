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
}
