<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import the Contact model

class ReportController extends Controller
{
    public function report_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        $contacts = Contact::orderBy('created_at', 'desc')->get();
    return view('admin.report_management', compact('contacts'));

    }
}
