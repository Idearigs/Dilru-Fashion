<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('Admin.auth.login');
    }

    // Handle Login Request
     // Handle Login
     public function login(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
 
         // Attempt to authenticate the user
         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             return redirect()->route('Admin'); // Redirect to Admin dashboard
         }
 
         return back()->withErrors(['email' => 'Invalid credentials.']);
     }
 
     public function logout(Request $request)
    {
        Auth::logout(); // Logs out the admin

        // Invalidate the session and regenerate CSRF token for security
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // Redirect to login page
    }



}
