<?php

namespace App\Http\Controllers;

use App\Models\Fashion; // Make sure the model class name is properly capitalized
use Illuminate\Http\Request;

class Cart extends Controller
{
    public function addtoCart($id)
    {
        $fashion = Fashion::find($id); // Assuming the model name is "Fashion" and not "fashion"

        if (!$fashion) {
            return redirect()->back()->with('error', 'Cloth not found.'); // Handle the case where the fashion item is not found.
        }

        $cart = session()->get('cart', []); // Initialize the cart as an empty array if it doesn't exist in the session.

        $cart[$id] = [
            "name" => $fashion->name,
            "qty" => 1,
            "price" => $fashion->price,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cloth added successfully.');
        // return view('cart', compact('cart')); // You don't need to return the view if you are redirecting back to the previous page.
    }
}
