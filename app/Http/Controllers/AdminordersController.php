<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;

class AdminordersController extends Controller
{
    public function orders()
    {
        $orders = Order::with('orders_products')->orderBy('id','desc')->get()->toArray();
        // dd($orders);
        return view('dashboard.order',compact('orders'));
    }
    public function orderDetails($id)
    {
        $orderDetails = Order::with('orders_products')->where('id',$id)->first()->toArray();
        $userDetails = User::where('id',$orderDetails['user_id'])->first()->toArray();
        $orderStatus = OrderStatus::where('status',1)->get()->toArray();

        // dd($orderDetails);
        return view('dashboard.order_details',compact('orderDetails','userDetails','orderStatus'));
    }
    public function updateOrderStatus(Request $request)
    {

    }
}
