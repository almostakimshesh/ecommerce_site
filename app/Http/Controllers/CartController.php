<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fashion;

class CartController extends Controller
{
    // public function showCart()
    // {
    //     $cart = session()->get('cart', []);

    //     return view('cart.show', compact('cart'));
    // }

    // public function addToCart(Request $request)
    // {
    //     $productId = $request->input('product_id');
    //     $product = [
    //         'id' => $productId,
    //         'name' => 'Product ' . $productId,
    //         'price' => 9.99, // Replace with your product's actual price
    //         'quantity' => 1,
    //     ];

    //     $cart = session()->get('cart', []);
    //     $cart[$productId] = $product;
    //     session()->put('cart', $cart);

    //     return redirect()->route('cart.show');
    // }
    // public function removeFromCart($productId)
    // {
    //     $cart = session()->get('cart', []);

    //     if (array_key_exists($productId, $cart)) {
    //         unset($cart[$productId]);
    //         session()->put('cart', $cart);
    //     }

    //     return redirect()->route('cart.show');
    // }

    public function addToCart(Request $request, $id)
    {
        // Retrieve the product with the given ID from the database
        $fashion = fashion::find($id);

        if (!$fashion) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Get the quantity from the form submission
        $quantity = $request->input('qty', 1);

        // Add the product to the cart
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            // If the product is already in the cart, update the quantity
            $cart[$id]['quantity'] += $quantity;
        } else {
            // If the product is not in the cart, add it as a new item
            $cart[$id] = [
                'name' => $fashion->title,
                'quantity' => $quantity,
                'price' => $fashion->price,
                'image' => $fashion->image,
            ];
        }

        // Store the updated cart in the session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }
}
