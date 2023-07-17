<?php

use App\Models\Category;

function category(){
    $categories = Category::latest()->get();
    return $categories;
}