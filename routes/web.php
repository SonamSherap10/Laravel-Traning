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
 Route::get('/category/delete/{id}',[\App\Http\Controllers\CategoryController::class,'destroy']);
 Route::get('/category/index',[\App\Http\Controllers\CategoryController::class,'index']);
 Route::post('/category/update/{id}',[\App\Http\Controllers\CategoryController::class,'update']);

 Route::get('/brand/create',[\App\Http\Controllers\BrandController::class,'create']);
 Route::post('/brand/store',[\App\Http\Controllers\BrandController::class,'store']);
 Route::post('/brand/update/{id}',[\App\Http\Controllers\BrandController::class,'update']);
 Route::get('/brand/index',[\App\Http\Controllers\BrandController::class,'index']);
 Route::get('/brand/edit/{id}',[\App\Http\Controllers\BrandController::class,'edit']);
 Route::get('/brand/delete/{id}',[\App\Http\Controllers\BrandController::class,'destroy']);

 Route::get('product/create',[\App\Http\Controllers\ProductController::class,"create"]);
 Route::post('product/store',[\App\Http\Controllers\ProductController::class,"store"]);
 Route::get('/product/index',[\App\Http\Controllers\ProductController::class,'index']);
 Route::get('/product/edit/{id}',[\App\Http\Controllers\ProductController::class,'edit']);
 Route::post('/product/update/{id}',[\App\Http\Controllers\ProductController::class,'update']);
 Route::get('/product/delete/{id}',[\App\Http\Controllers\ProductController::class,'destroy']);


