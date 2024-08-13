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
 Route::post('/category/store',[\App\Http\Controllers\CategoryController::class,'store']);
 Route::get('/category/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);
 Route::get('/category/index',[\App\Http\Controllers\CategoryController::class,'show']);
 Route::post('/category/update/{id}',[\App\Http\Controllers\CategoryController::class,'update']);