<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function user_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();
        $user = User::select('name', 'email', 'role')->get();
        return view('admin.user_management', compact('user'));
    }


    public function user_create()
    {
        return view('admin.user_create');
    }

    public function store(Request $request)
{
    try {

    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users',
    'phone' => 'nullable|string|max:15',
    'address' => 'nullable|string|max:255',
    'password' => 'required|string|min:6|confirmed',
    'role' => 'required|in:0,1',
    'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
]);

$photoPath = null;
if ($request->hasFile('photo')) {
    $photoPath = $request->file('photo')->store('profile_photos', 'public');
}

User::create([
    'name' => $validated['name'],
    'email' => $validated['email'],
    'phone' => $validated['phone'],
    'address' => $validated['address'],
    'password' => Hash::make($validated['password']),
    'profile_photo' => $photoPath,
    'role' => $validated['role'],
]);

    return redirect()->back()->with('success', 'User created successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['db_error' => 'Database error: ' . $e->getMessage()]);
    }
}
}
