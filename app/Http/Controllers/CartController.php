<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\fashion;
use Illuminate\Http\Request;
use App\Models\OrdersProduct;
use App\Models\DeliveryAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
                // 'user_id'=>Auth::user()->id,
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






public function checkout(Request $request) {
    if ($request->isMethod('post')) {
        $data = $request->input();

        $cart = Session::get('cart');
        if ($cart) {
            $cartData = Session::get('cart');
            // return $cartData;
            $deliveryAddresses = DeliveryAddress::delieryAddresses();
            return view('frontend.checkout',compact('deliveryAddresses','cartData'));
        } else {
            return "Cart data not found in session.";
        }

    }
else{
    $cart = Session::get('cart');
    if ($cart) {
        $cartData = Session::get('cart');
        // return $cartData;
        $deliveryAddresses = DeliveryAddress::delieryAddresses();
        return redirect()->route('order');
    } else {
        return "Cart data not found in session.";
    }

}

        // if($data["payment"]=="COD"){
        //     $pay = "COD";
        // }
        // else{
        //     $pay = "Prepaid";
        // }
        // $deliveryAddresses = DeliveryAddress::where('id',$data['address_id'])->first()->toArray();

        // dd($deliveryAddresses);

    // }
        // if($request->isMethod('post'))
    // {
    //     $sendCart = $request->all();

    //            session()->put('item', $sendCart);
    //     $new = session()->get('item');
        // dd($new);

//        session()->put('item', $sendCart);
//         $new = session()->get('item');
// dd($new);
    // }

        // $sendCart = $request->all('cat');
        // $new = session()->get('item');
        // $deliveryAddresses = DeliveryAddress::where('id',$data['address_id'])->first()->toArray();
        // $deliveryAddresses = DeliveryAddress::delieryAddresses();
        // return view('frontend.checkout',compact('deliveryAddresses'));//,'new'


}

public function order( Request $request)
{
    if($request->isMethod('post'))
    {
        $data = $request->all();
        $grandTotal = Session::get('grand_total');
        if($data["payment"]=="COD"){
            $pay = "COD";
        }
        else{
            $pay = "Prepaid";
        }
     //dd($cartData = Session::get('cart'))   ;
        $deliveryAddresses = DeliveryAddress::where('id',$data['address_id'])->first()->toArray();

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->name = Auth::user()->name;
        $order->address = $deliveryAddresses['address'];
        $order->city = $deliveryAddresses['city'];
        $order->district = $deliveryAddresses ['district'];
        $order->division = $deliveryAddresses['division'];
        $order->country = $deliveryAddresses['country'];
        $order->pincode = $deliveryAddresses['pincode'];
        $order->mobile = $deliveryAddresses['mobile'];
        $order->email =  Auth::user()->email;
        $order->shipping_charges = 0;
        $order->order_status = "new";
        $order->payment_method = $pay;
        $order->order_gateway = $data["payment"];
        $cartData = Session::get('cart');

        foreach ($cartData as $cartItem) {
            $grandTotal = $cartItem['grandtotal'];
        }
        $order->grand_total = $grandTotal;
        $order->save();

        $order_id = DB::getPdo()->lastInsertId();

        $cartItems = $cartData;
        foreach($cartItems as $key => $item){
            $cartItem = new OrdersProduct;
            $cartItem->order_id = $order_id;
            $cartItem->user_id = Auth::user()->id;
            $getProductDetails = fashion::select('title')->where('id',$item['id'])->first()->toArray();
            $cartItem->product_id = $item['id'];
            $cartItem->product_name = $item['name'];
            $cartItem->product_price = $item['price'];
            $cartItem->product_qty = $item['quantity'];
            $cartItem ->save();
        }
        $orders = Order::with('orders_products')->where('user_id',Auth::user()->id)->get()->toArray();
        // dd($orders);
        // return view('frontend.order',compact('orders'));
        // $cartItems = Session::forget('cart');
    //    return redirect('/myorder',compact('deliveryAddresses','pay','cartItems','orders'));
       return redirect()->route('myorder')->with(compact('deliveryAddresses','pay','cartItems','orders'));


    //    ->wiih(compact('deliveryAddresses','pay','cartItems','orders'))
       // dd($orders);

        // dd($cartData,$deliveryAddresses,$pay);
    }
    else{
        return redirect()->route('myorder');

    }
}

}





