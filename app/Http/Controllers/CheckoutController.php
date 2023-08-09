<?php

namespace App\Http\Controllers;

use App\Models\DeliveryAddress;
use Illuminate\Http\Request;
use Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data[' delivery_addresses '] = DeliveryAddress::orderBy('id','desc')->paginate(5);
            return view('frontend.add_delivery_address',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.add_delivery_address',compact('deliveryAddress'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'address'=>'required',
            'city'=>'required',
            'district'=>'required',
            'division'=>'required',
            'country'=>'required',
            'pincode'=>'required',
            'mobile'=>'required|min:11'
         ]);



    $address = new DeliveryAddress();
    $address->address = $request->address;
    $address->city = $request->city;
    $address->district = $request->district;
    $address->division = $request->division;
    $address->country = $request->country;
    $address->pincode = $request->pincode;
    $address->mobile = $request->mobile;
    $address->save();

    return $address;
}


    /**
     * Display the specified resource.
     */
    public function show(DeliveryAddress $deliveryAddress)
    {
        return view('frontend.add_delivery_address',compact('deliveryAddress'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
