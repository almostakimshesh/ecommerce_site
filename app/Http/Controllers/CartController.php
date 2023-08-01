<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fashion;

class CartController extends Controller
{

public function addToCart(Request $request, $id)
{
    // Retrieve the product with the given ID from the database
    $fashion = fashion::find($id);

    if (!$fashion) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Get the quantity from the form submission
    $quantity = $request->quantity;
    $totalPrice = $quantity * $fashion->price;
    // Add the product to the cart
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        // If the product is already in the cart, update the quantity
        $cart[$id]['quantity'] += $quantity;
        $cart[$id]['total'] = $cart[$id]['quantity'] * $cart[$id]['price'];

    } else {
        // If the product is not in the cart, add it as a new item
        $cart[$id] = [
            'name' => $fashion->title,
            'quantity' => $quantity,
            'price' => $fashion->price,
            'image' => $fashion->image,
            'total' => $totalPrice,
        ];
    }

    // // Calculate the total for the new or updated item

    // Store the updated cart in the session
    session()->put('cart', $cart);
    // dd($cart);
    return redirect('index')->with('success', 'Product added to cart successfully.');
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
}

