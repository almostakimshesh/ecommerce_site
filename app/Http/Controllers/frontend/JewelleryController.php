<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JewelleryController extends Controller
{
    public function Index()
    {
        return view('frontend.jewellery');
    }
}
