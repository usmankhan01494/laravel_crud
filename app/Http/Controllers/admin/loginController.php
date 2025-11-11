<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    //authenticate route this Admin
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
        if (Auth::guard('admin')-> attempt(['email' => $request->email, 'password' => $request->password])) {

            if(Auth::guard('admin')->user()->role !== 'admin'){
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error', 'Access denied. Admins only.');
            }
            // Login successful → redirect to dashboard
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        } else {
            // Invalid credentials
            return redirect()->route('admin.login')->with(
                'error',
                'Invalid email or password.'
            );
               
        }
    }else {
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput();
        }
    
} 

public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

}
