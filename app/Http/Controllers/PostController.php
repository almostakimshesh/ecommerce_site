<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
   
    public function index()
    {
        $data['posts'] = Post::orderBy('id','desc')->paginate(5);
            return view('posts.index',$data);
    }

  
    public function create()
    {
        return view('posts.create');
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

       
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $upload;
        
        $post->save();

        return redirect()->route('posts.index')->with('success','Post has been created successfully');
    }

  
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

  
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

 
    public function update(Request $request,$id)
    {
        $request->validate([

                'title'=>'required',
                'description'=>'required',
                'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $post = Post::find($id);

        if ($request->hasFile('image')) {
            $folder = '/blog/';
            $upload = (new ImageUpload)->imageUpload($request->file('image'), $folder);
        }

       
        $post->title = $request->title;
        $post->description = $request->description;
        if(isset($upload)){
            $post->image = $upload;
        }
        $post->save();

        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post has been deleted successfully');
    }
}
