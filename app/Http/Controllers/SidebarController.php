<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::get();
        // return $data;
        return view('category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getCategories()
    {
        $categories = DB::table('categories')->pluck("categoryname","id");
        return view('layout.sidebar',compact('categories'));
    }

     public function getSubcatagories($id)
    {
        $subcatagories = DB::table('subcatagories')->where("categoriesid",$id)->pluck("subcatagoryname","id");
       return json_encode($subcatagories);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
