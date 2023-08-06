<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;



class ProductsController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }


    public function adlogin(Request $request)
    {
        return view('dashboard.user.login');
    }

    public function adminlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('dashboard'); // Change 'dashboard' to your actual route name
        } else {
            // Authentication failed, redirect back to the login form with an error message
            return redirect('/')->with('error','Invalid credentials.');
        }
    }
        public function logouts()
    {
        Session::flush();
        Auth::guard('admin')->logout();

        return redirect('/');
    }

}
