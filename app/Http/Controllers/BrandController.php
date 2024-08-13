<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Brand::all();
        // dd($category);
        return view('backend.brand.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.CreateBrand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request -> validate([
            'title'=>"required",
            'description'=>"required"
       ]);
       // dd($request->all());
       $category = new Brand();
       $category ->title=$request->title;
       $category ->description=$request->description;
       $category -> save();
       return redirect()->back()->with('message','data stored');
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
        $category = Brand::find($id);
        // dd($category);
        return view('backend.brand.EditBrand',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'title'=>"required",
            'description'=>"required"
       ]);
            $category = Brand::find($id);
            $category ->title=$request->title;
            $category ->description=$request->description;
            $category -> save();
            return redirect()->back()->with('message','data updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $category = Brand::find($id);
        $category->delete();
        return redirect()->back()->with('message','data deletde');
        

    }
}
