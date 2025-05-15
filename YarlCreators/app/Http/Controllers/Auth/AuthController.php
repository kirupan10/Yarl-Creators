<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Show registration form
     */
    public function register()
    {
        return view('auth.signup');
    }

    /**
     * Handle user registration
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => false, // regular user by default
        ]);

        Auth::login($user);

        return $this->redirectBasedOnAdmin($user);
    }

    /**
     * Handle login
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return $this->redirectBasedOnAdmin(Auth::user());
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Redirect based on is_admin value
     */
    protected function redirectBasedOnAdmin(User $user)
    {
        if ($user->is_admin) {
            return redirect()->intended('/admin/dashboard')->with('success', 'Welcome Admin!');
        }

        return redirect()->intended('/profile')->with('success', 'Login successful!');
    }

    /**
     * Show user dashboard
     */
    public function dashboard()
    {
        if (Auth::check() && !Auth::user()->is_admin) {
            return view('user.dashboard'); // Change to your user view
        }

        return redirect('login')->with('error', 'Unauthorized access');
    }

    /**
     * Show admin dashboard
     */
    public function adminDashboard()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return view('admin.dashboard'); // Change to your admin view
        }

        return redirect('login')->with('error', 'Unauthorized access');
    }

    /**
     * Logout
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login')->with('success', 'You have been logged out');
    }

    /**
     * Show forgot password form
     */
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    /**
     * Show reset password form
     */
    public function resetPassword()
    {
        return view('auth.reset-password');
    }
}
