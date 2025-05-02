<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Method to create a new user
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => $data['is_admin'] ?? 0, // Default to user if no is_admin flag provided
        ]);
    }

    /**
     * Handle the registration of a new admin
     * @return response()
     */
    public function postAdminRegistration(Request $request)
    {
        // Validate the input data for admin registration
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Prepare data to create the admin user
        $data = $request->all();
        $data['is_admin'] = 1; // Set the is_admin flag to 1 for admin registration

        // Create the admin user
        $check = $this->create($data);

        // Attempt to log the admin in after registration
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')->withSuccess('Admin account created successfully!');
        }

        return redirect()->route('admin.login')->withErrors(['Error logging in after registration']);
    }

    /**
     * Show the admin registration form
     * @return response()
     */
    public function showAdminRegistrationForm()
    {
        return view('auth.admin.signup');
    }

    /**
     * Handle login for normal users
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (!auth()->user()->is_admin) {
                return redirect()->intended('/')->withSuccess('You are logged in!');
            } else {
                Auth::logout(); // Prevent admin from using user login
                return redirect('login')->withErrors(['Admins must log in from the admin panel.']);
            }
        }

        return redirect('login')->withErrors(['Invalid credentials']);
    }

    /**
     * Handle login for admins
     * @return response()
     */
    public function AdminpostLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.dashboard')->withSuccess('Welcome Admin');
            } else {
                Auth::logout(); // Prevent non-admin from using admin login
                return redirect('admin.login')->withErrors(['You are not authorized to access the admin panel.']);
            }
        }

        return redirect('admin.login')->withErrors(['Invalid credentials']);
    }

    /**
     * Show the admin login form
     * @return response()
     */
    public function admin_login(Request $request)
    {
        return view('auth.admin.login');
    }

    /**
     * Handle logout for the user or admin
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    /**
     * Show the user login form
     * @return response()
     */
    public function login(Request $request)
    {
        return view('auth.login');
    }

    /**
     * Show the user registration form
     * @return response()
     */
    public function register(Request $request)
    {
        return view('auth.signup');
    }

    /**
     * Show the forgot password form
     * @return response()
     */
    public function forgotPassword(Request $request)
    {
        return view('auth.forgot-password');
    }

    /**
     * Show the reset password form
     * @return response()
     */
    public function resetPassword(Request $request)
    {
        return view('auth.reset-password');
    }

    /**
     * Show the admin dashboard
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }
        return redirect("login")->withErrors('Opps! You do not have access');
    }
}
