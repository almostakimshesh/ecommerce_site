<?php

use App\Models\Category;
use App\Models\Cus_user;

function category(){
    $categories = Category::latest()->get();
    return $categories;
}

function cus_users(){
    $cus_users = Cus_user::latest()->get();
    return $cus_users;
}
