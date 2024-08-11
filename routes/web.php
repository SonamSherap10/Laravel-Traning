<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view',function (){
    return view('contact');
});

Route::get('/product',function(){
  return view ('product.product');
});

Route::get('/product/test',[\App\Http\Controllers\ProductController::class,'index'])->name('product.test');
Route::get('product/form',[\App\Http\Controllers\ProductController::class,'form']);
