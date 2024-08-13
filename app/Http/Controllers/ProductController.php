<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Product::all();
        return view('backend.product.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'price' => "required",
            'brand_id' => "nullable",
            'stock' => "required",
            'quantity' => "required",
            'image' => "required", 
        ]);
    
        $category = new Product();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->price = $request->price;
        $category->brand_id = $request->brand_id;
        $category->stock = $request->stock;
        $category->quantity = $request->quantity;
    
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $category->image = $imageName;
    
        $category->save();
    
        return redirect()->back()->with('message', 'Data stored');
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
        $category = Product::find($id);
        // dd($category);
        return view('backend.product.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'price' => "required",
            'brand_id' => "nullable",
            'stock' => "required",
            'quantity' => "required",
            'image' => "required", 
        ]);
    
        $category = Product::find($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->price = $request->price;
        $category->brand_id = $request->brand_id;
        $category->stock = $request->stock;
        $category->quantity = $request->quantity;
    
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $category->image = $imageName;
    
        $category->save();
    
        return redirect()->back()->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Product::find($id);
        $category->delete();
        return redirect()->back()->with('message','data deleted');
        

    }
}
