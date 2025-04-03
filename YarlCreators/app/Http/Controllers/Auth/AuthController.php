<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{


    /**

     * Write code on Method

     *

     * @return response()

     */

     public function postRegistration(Request $request)

     {

         $request->validate([

             'name' => 'required',

             'email' => 'required|email|unique:users',

             'password' => 'required|min:6',

         ]);



         $data = $request->all();

         $check = $this->create($data);



         return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');

     }



     /**

      * Write code on Method

      *

      * @return response()

      */

     public function dashboard()

     {

         if(Auth::check()){

             return view('dashboard');

         }



         return redirect("login")->withSuccess('Opps! You do not have access');

     }



     /**

      * Write code on Method

      *

      * @return response()

      */

     public function create(array $data)

     {

       return User::create([

         'name' => $data['name'],

         'email' => $data['email'],

         'password' => Hash::make($data['password'])

       ]);

     }



     /**

      * Write code on Method

      *

      * @return response()

      */

     public function logout() {

         Session::flush();

         Auth::logout();



         return Redirect('login');

     }

     public function login(Request $request) {

         return view('auth.login');

     }
     public function register(Request $request) {

         return view('auth.registration');

     }
     public function forgotPassword(Request $request) {

         return view('auth.forgot-password');

     }
     public function resetPassword(Request $request) {

         return view('auth.reset-password');

     }




 public function postLogin(Request $request)

 {

     $request->validate([

         'email' => 'required',

         'password' => 'required',

     ]);



     $credentials = $request->only('email', 'password');

     if (Auth::attempt($credentials)) {

         return redirect()->intended('dashboard')

                     ->withSuccess('You have Successfully loggedin');

     }



     return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');

 }

}

