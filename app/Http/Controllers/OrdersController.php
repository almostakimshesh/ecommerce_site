<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function orders()
    {
        $orders = Order::with('orders_products')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get()->toArray();
        // dd($orders);
        return view('frontend.order',compact('orders'));
    }
    public function orderDetails($id)
    {
        $orderDetails = Order::with('order_details')->where('id',$id)->first()->toArray();

        dd($orderDetails);

    }
}
