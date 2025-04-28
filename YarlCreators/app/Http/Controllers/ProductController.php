<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function user_product_view()
    {
        return view('user.products'); // Redirects to the product index view
    }

    public function show(){
        return view('CameraAccessories');
    }

    public function admin_products_view(){

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        return view('admin.products', compact('user'));
    }
}
