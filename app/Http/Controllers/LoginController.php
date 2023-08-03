<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cus_user;
use CurlHandle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function ndex()
    {
        $data['cus_users'] = Cus_user::orderBy('id','desc')->paginate(5);
        return view('frontend.layout.header',$data);
    }
    public function showLoginForm()
    {
        return view('frontend.user.login');
    }

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
    public function logout()
    {
        Auth::logout();
        return redirect()->route('userlogin');
    }

    public function showIndex()
    {
        $loggedInUser = Auth::user(); // Get the currently logged-in user from the Auth facade

        // Pass the $loggedInUser variable to the 'frontend.layout.header' view
        return $loggedInUser;
    }

}
