<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use App\Models\Posts2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Main extends Controller
{
    public function Index()
    {
        $data['posts'] = Post::orderBy('id','desc')->paginate(5);
        $data2['posts2s'] = Posts2::orderBy('id','desc')->paginate(5);
        return view('frontend.index',$data,$data2);
    }



}
