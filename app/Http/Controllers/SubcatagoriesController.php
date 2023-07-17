<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcatagories;
use Illuminate\Support\Facades\DB;

class SubcatagoriesController extends Controller
{
    public function getCategories()
    {
        $categories = DB::table('categories')->pluck("categoryname","id");
        return view('frontend.layout.header',compact('categories'));
    }

     public function getSubcatagories($id)
    {
        $subcatagories = DB::table('subcatagories')->where("categoriesid",$id)->pluck("subcatagoryname","id");
       return json_encode($subcatagories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Subcatagories $subcatagories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcatagories $subcatagories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcatagories $subcatagories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcatagories $subcatagories)
    {
        //
    }
}
