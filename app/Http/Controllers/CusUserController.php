<?php

namespace App\Http\Controllers;
// use Validator;
// use Rules\Password;
use App\Models\Cus_user;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class CusUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.user.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.user.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([

        'firstname'=>['required'],
        'lastname'=>['required'],
        'email'=>['required', 'email', 'max:255', 'unique:cus_users'],
        'phone'=>['required'],
        'password'=>['required',Rules\Password::defaults()],

    ]);

    $register = new Cus_user();
    $register->firstname = $request->firstname;
    $register->lastname = $request->lastname;
    $register->email = $request->email;
    $register->password = Hash::make($request->password);
    $register->phone = $request->phone;

    $register->save();
    return redirect()->route('userlogin')->with('success','product has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cus_user $cus_user)
    {
        return view('frontend.user.register');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cus_user $cus_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cus_user $cus_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cus_user $cus_user)
    {
        //
    }
}
