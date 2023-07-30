<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Electronic;
use Illuminate\Http\Request;
use App\Services\ImageUpload;

class ElectronicController extends Controller
{
    public function ndex()
    {
        $data['electronics'] = Electronic::orderBy('id','desc')->paginate(5);
        return view('frontend.electronic',$data);
    }

    public function details($id)
    {
        $electronic = Electronic::find($id);
        return view ('frontend.electronic.details',compact('electronic'));

    }

    public function index(){
        {
            $data['categories'] = Category::orderBy('id','desc')->paginate(5);
            $data['electronics'] = Electronic::orderBy('id','desc')->paginate(5);
                return view('dashboard.electronic.index',$data);
        }
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        return view('dashboard.electronic.create');
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

   
    $electronic = new Electronic;
    $electronic->title = $request->title;
    $electronic->price = $request->price;
    $electronic->image = $upload;
    
    $electronic->save();
    return redirect()->route('electronic.index')->with('success','product has been created successfully');
    }

    public function show(Electronic $electronic)
    {
        return view('dashboard.electronic.show',compact('electronic'));
    }


    public function edit(Electronic $electronic)
    {
        return view('dashboard.electronic.edit',compact('electronic'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'title'=>'required',
            'price'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    $electronic = Electronic::find($id);

    if ($request->hasFile('image')) {
        $folder = '/blog/';
        $upload = (new ImageUpload)->imageUpload($request->file('image'), $folder);
    }

   
    $electronic->title = $request->title;
    $electronic->price = $request->price;
    if(isset($upload)){
        $electronic->image = $upload;
    }
    $electronic->save();
    return redirect()->route('electronic.index')->with('success','product has been Updated successfully');;
    }

    public function destroy(Electronic $electronic)
    {
        $electronic->delete();
        return redirect()->route('electronic.index')->with('success','product deleted successfully');
    }
}