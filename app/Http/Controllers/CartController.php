<?php

namespace App\Http\Controllers;

use App\Models\DeliveryAddress;
use Illuminate\Http\Request;
use App\Models\fashion;

class CartController extends Controller
{

    public function addToCart(Request $request, $id)
    {
        // Retrieve the product with the given ID from the database
        $fashion = Fashion::find($id);

        if (!$fashion) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Get the quantity from the form submission
        $quantity = $request->quantity;
        $totalPrice = $quantity * $fashion->price;
        $grandTotal = 0;
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            // If the product is already in the cart, update the quantity and total price
            $cart[$id]['quantity'] += $quantity;
            $cart[$id]['total'] = $cart[$id]['quantity'] * $cart[$id]['price'];
        } else {
            // If the product is not in the cart, add it as a new item
            $cart[$id] = [
                'id' =>$fashion->id,
                'name' => $fashion->title,
                'quantity' => $quantity,
                'price' => $fashion->price,
                'image' => $fashion->image,
                'total' => $totalPrice,
                'grandtotal' => $grandTotal,
            ];
        }

        // Calculate the grand total for all items in the cart
        $grandTotal = 0;
        foreach ($cart as $item) {
            $grandTotal += $item['total'];
        }

        // Update the grand total for each cart item
        foreach ($cart as &$item) {
            $item['grandtotal'] = $grandTotal;
        }

        // Store the updated cart back in the session
        session()->put('cart', $cart);

        // Redirect back to the page with a success message
        return redirect()->back()->with('success', 'Product added to cart.');
    }


public function removeFromCart($productId)
{
    // Get the cart data from the session
    $cart = session()->get('cart', []);

    // Check if the product with the given ID exists in the cart
    if (isset($cart[$productId])) {
        // If the product exists, remove it from the cart
        unset($cart[$productId]);

        // Update the cart in the session with the modified data
        session()->put('cart', $cart);

        // Redirect back to the cart page with a success message
        return redirect()->back()->with('success', 'Product removed from cart successfully.');
    } else {
        // If the product is not found in the cart, redirect back with an error message
        return redirect()->back()->with('error', 'Product not found in cart.');
    }
}

public function sendCart(Request $request)
{
    if ($request->isMethod('post')) {
        $sendCart = $request->input('cat', []); // Provide an empty array as default

        // Store the cart data in the session

        // Retrieve the stored session data as an array
        $sessionDataArray = session()->get('form_data', []);




        session()->put('form_data', $sendCart);
        print_r( session()->get('form_data', []));
        return view('frontend.checkout',compact('sessionDataArray'));
    }
}




public function checkout(Request $request){
    if($request->isMethod('post'))
    {
        $data = $request->all();
        //  return $data;
        // if($data['pay-method']=="COD"){
        //     $pay = "COD";
        // }
        // else{
        //     $pay = "Prepaid";
        // }
        // $deliveryAddresses = DeliveryAddress::where('id',$data['address_id'])->first()->toArray();
        // dd($deliveryAddresses);

    // }
    //     if($request->isMethod('post'))
    // {
    //     $sendCart = $request->all();

    //            session()->put('item', $sendCart);
    //     $new = session()->get('item');
        // dd($new);

//        session()->put('item', $sendCart);
//         $new = session()->get('item');
// dd($new);
    }

        $sendCart = $request->all('cat');
        // $new = session()->get('item');
        $deliveryAddresses = DeliveryAddress::delieryAddresses();
        return view('frontend.checkout',compact('deliveryAddresses','sendCart'));//,'new'


}
}


