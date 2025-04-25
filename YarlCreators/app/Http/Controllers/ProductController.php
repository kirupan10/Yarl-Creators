<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products'); // Redirects to the product index view
    }

    public function show(){
        return view('CameraAccessories');
    }

    public function view(){

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        return view('products', compact('user'));
    }
}
