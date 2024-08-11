<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "hello" ;
    }

    public function form(){
      return view('product.form');
    }
}
