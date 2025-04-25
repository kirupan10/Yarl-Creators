<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Or safely access the user
    $user = auth()->user();

    return view('admin.dashboard', compact('user'));
}
}
