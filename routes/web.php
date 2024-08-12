<?php

use Illuminate\Support\Facades\Route;


Route::get('/view',function (){
    return view('contact');
});

Route::get('/product',function(){
  return view ('product.product');
});

Route::get('/product/test',[\App\Http\Controllers\ProductController::class,'index'])->name('product.test');
Route::get('product/form',[\App\Http\Controllers\ProductController::class,'form']);

Route::get('/contact',function(){
  return view('backend.pages.contact');
});

Route::get('/about',function(){
  return view('backend.pages.about');
});

Route::get('/',function(){
  return view('backend.pages.home');
});

 Route::get('/category/create',[\App\Http\Controllers\CategoryController::class,'create']);