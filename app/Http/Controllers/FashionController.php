<?php

namespace App\Http\Controllers;

use App\Models\Posts2;
use App\Models\fashion;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\ImageUpload;

class FashionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ndex()
    {
        $data['fashions'] = fashion::orderBy('id','desc')->paginate(5);
        return view('frontend.fashion',$data);
    }

    public function index()
    {
        {
            $data['categories'] = Category::orderBy('id','desc')->paginate(5);
            $data['fashions'] = fashion::orderBy('id','desc')->paginate(5);
                return view('dashboard.fashion.index',$data);
        }
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fashion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'price'=>'required',

    ]);

    if ($request->hasFile('image')) {
        $folder = '/blog/';
        $upload = (new ImageUpload)->imageUpload($request->file('image'), $folder);
    }

   
    $fashion = new fashion;
    $fashion->title = $request->title;
    $fashion->price = $request->price;
    $fashion->image = $upload;
    
    $fashion->save();
    return redirect()->route('fashion.index')->with('success','product has been created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(fashion $fashion)
    {
        return view('dashboard.fashion.show',compact('fashion'));

    }

    public function details(fashion $fashion)
    {
        return view('frontend.details',compact('fashion'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fashion $fashion)
    {
        return view('dashboard.fashion.edit',compact('fashion'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'title'=>'required',
            'price'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    $fashion = fashion::find($id);

    if ($request->hasFile('image')) {
        $folder = '/blog/';
        $upload = (new ImageUpload)->imageUpload($request->file('image'), $folder);
    }

   
    $fashion->title = $request->title;
    $fashion->price = $request->price;
    if(isset($upload)){
        $fashion->image = $upload;
    }
    $fashion->save();
    return redirect()->route('fashion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fashion $fashion)
    {
        $fashion->delete();
        return redirect()->route('fashion.index')->with('success','product deleted successfully');
    }
}
