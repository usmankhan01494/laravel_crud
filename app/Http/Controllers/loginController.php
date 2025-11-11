<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Show the admin login form
     */
    public function index()
    {
        return view('user.login');
    }

    /**
     * Handle login form submission
     */
    public function authenticate(Request $request)
    {
        // Validate form input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // If validation fails
        if ($validator->passes()) {
            

        // Attempt authentication
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Login successful → redirect to dashboard
            return redirect()->route('user.dashboard')->with('success', 'Login successful!');
        } else {
            // Invalid credentials
            return redirect()->route('user.login')->with(
                'error',
                'Invalid email or password.'
            );
               
        }
    }else {
            return redirect()->route('user.login')
                ->withErrors($validator)
                ->withInput();
        }
    
} 

    /**
     * Show registration form
     */
    public function register()
    {
        return view('user.register');
    }

    /**
     * Handle registration form submission
     */
    public function processRegister(Request $request)
    {
        // Validate form input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // If validation fails
        if ($validator->passes()) {
            

        // Save new user
        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();
        

        // Redirect to login
        return redirect()->route('user.login')
            ->with('success', 'Registration successful! Please log in.');
    }
     else {
            return redirect()->route('user.register')
                ->withErrors($validator)
                ->withInput();
        }
    }

    /**
     * Logout method
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with('success', 'You have been logged out.');
    }
}
