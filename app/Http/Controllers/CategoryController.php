<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(5);
        return view('category.index',$data);
    }


    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'categoryname'=>'required',
        ]);
        $category = new Category;
        $category->categoryname = $request->categoryname;
        $category->save();

        return redirect()->route('category.index')->with('success','category has been created successfully');
    }


    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }


    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'categoryname'=>'required',
    ]);
   
    $category = Category::find($id);

    $category->categoryname = $request->categoryname;
    $category->save();
    return redirect()->route('category.index')->with('success','Category updated successfully');

    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success','Category has been deleted successfully');
    }
}
