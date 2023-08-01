<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.user.login');
    }

    /**
     * Handle the login request.
     */
    public function userlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('index'); // Change 'dashboard' to the desired route
        } else {
            // Authentication failed, redirect back to the login form with an error message
            return redirect()->route('index/login')->with('error', 'Invalid credentials.');
        }
    }

    /**
     * Handle the logout request.
     */
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
}
