<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts2;
use Illuminate\Http\Request;
use App\Services\ImageUpload;

class Posts2Controller extends Controller
{
    public function index()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(5);
        $data['posts2s'] = Posts2::orderBy('id','desc')->paginate(5);
        return view('posts2.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::latest()->get();
        return view('posts2.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'title'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description'=>'required',

        ]);

        if ($request->hasFile('image')) {
            $folder = '/blog/';
            $upload = (new ImageUpload)->imageUpload($request->file('image'), $folder);
        }

    
        $posts2 = new Posts2;
        $posts2->title = $request->title;
        $posts2->description = $request->description;
        $posts2->image = $upload;
        
        $posts2->save();

        return redirect()->route('posts2.index')->with('success','Post has been created successfully');
    }

    public function show(Posts2 $post2)
    {
        return view('posts2.show',compact('posts2'));
    }

    public function edit(Posts2 $posts2)
    {
        //$categories = Category::latest()->get();
        return view('posts2.edit',compact('posts2'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    $posts2 = Posts2::find($id);

    if ($request->hasFile('image')) {
        $folder = '/blog/';
        $upload = (new ImageUpload)->imageUpload($request->file('image'), $folder);
    }

   
    $posts2 = new Posts2;
    $posts2->title = $request->title;
    $posts2->description = $request->description;
    if(isset($upload)){
        $posts2->image = $upload;
    }
    $posts2->save();

    return redirect()->route('posts2.index')->with('success','Post updated successfully');
    }


    public function destroy(Posts2 $posts2)
    {
        $posts2->delete();
        return redirect()->route('posts2.index')->with('success','Post has been deleted successfully');
    }
}
