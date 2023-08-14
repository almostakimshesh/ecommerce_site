<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DeliveryAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
            'address'=>'required|regex:/^[\pL\s\-]+$/u',
            'city'=>'required|regex:/^[\pL\s\-]+$/u',
            'district'=>'required|regex:/^[\pL\s\-]+$/u',
            'division'=>'required|regex:/^[\pL\s\-]+$/u',
            'country'=>'required|regex:/^[\pL\s\-]+$/u',
            'pincode'=>'required|digits:4|numeric',
            'mobile'=>'required|min:11|numeric'
         ]);



    $address = new DeliveryAddress();
    $address->user_id = Auth::user()->id;
    $address->status = 1;
    $address->address = $request->address;
    $address->city = $request->city;
    $address->district = $request->district;
    $address->division = $request->division;
    $address->country = $request->country;
    $address->pincode = $request->pincode;
    $address->mobile = $request->mobile;
    $address->save();

    return redirect()->route('checkout');
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
    public function edit(DeliveryAddress $deliveryAddress ,$id)
    {
        $address = DeliveryAddress::find($id);
        return view('frontend.edit_delivery_address',compact('address'));
    }
    public function add_delivery_address_edit($id)
    {
        $address = DeliveryAddress::find($id);
        return view('frontend.edit_delivery_address',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'address'=>'required|regex:/^[\pL\s\-]+$/u',
            'city'=>'required|regex:/^[\pL\s\-]+$/u',
            'district'=>'required|regex:/^[\pL\s\-]+$/u',
            'division'=>'required|regex:/^[\pL\s\-]+$/u',
            'country'=>'required|regex:/^[\pL\s\-]+$/u',
            'pincode'=>'required|digits:4|numeric',
            'mobile'=>'required|min:11|numeric'
    ]);

    $address = DeliveryAddress::find($id);


    $address->address = $request->address;
    $address->city = $request->city;
    $address->district = $request->district;
    $address->division = $request->division;
    $address->country = $request->country;
    $address->pincode = $request->pincode;
    $address->mobile = $request->mobile;
    $address->save();

    return redirect()->route('checkout')->with('success','Delivery address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeliveryAddress $deliveryAddress , $id)

    {
        $address = DeliveryAddress::find($id );

        $address->delete();
        return redirect()->route('checkout')->with('success','Address has been deleted successfully');
    }
}
