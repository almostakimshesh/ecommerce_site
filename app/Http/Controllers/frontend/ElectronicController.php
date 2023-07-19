<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElectronicController extends Controller
{
    
    public function Index()
    {
        $data['posts'] = Post::orderBy('id','desc')->paginate(5);
        return view('frontend.electronic',$data);
    }



}
