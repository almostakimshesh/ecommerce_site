<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use App\Models\Posts2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Electronic;
use App\Models\fashion;

class Main extends Controller
{
    public function Index()
    {
        $data['electronics'] = Electronic::orderBy('id','desc')->paginate(5);
        $data2['fashions'] = fashion::orderBy('id','desc')->paginate(5);
        return view('frontend.index',$data,$data2);
    }



}
