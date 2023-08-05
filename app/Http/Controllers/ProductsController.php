<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ProductsController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }


    public function login(Request $request)
    {
        return view('frontend.user.login');
    }

    public function userlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect('dashboard'); // Change 'dashboard' to your actual route name
        } else {
            // Authentication failed, redirect back to the login form with an error message
            return 'dfdfdfd';
        }
    }




        public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
