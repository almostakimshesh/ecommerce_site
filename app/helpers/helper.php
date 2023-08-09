<?php

use App\Models\Category;
use App\Models\Cus_user;
use App\Models\DeliveryAddress;

function category(){
    $categories = Category::latest()->get();
    return $categories;
}

function cus_users(){
    $cus_users = Cus_user::latest()->get();
    return $cus_users;
}

// function delivery_addresses(){
//     $delivery_addresses = DeliveryAddress::latest()->get();
//     return $delivery_addresses;
// }
