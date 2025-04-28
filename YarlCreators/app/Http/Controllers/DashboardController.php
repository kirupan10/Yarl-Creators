<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){ // baisc dashboard functions

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('admin.dashboard', compact('user'));
}
public function feedback_view(){ // feedback view

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('admin.feedback', compact('user'));
}

public function orders_view(){ // admin orders.view

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('admin.orders', compact('user'));
}

public function users_view(){  // admin users.view

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('admin.users', compact('user'));
}

public function admin_blogs_view(){ // admin blog view function
    // Check if the user is authenticated
    // If not, redirect to the login page

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('admin.blog', compact('user'));
}
}
