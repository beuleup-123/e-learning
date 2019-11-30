<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($slug){
        return view('products.show' , compact("slug"));
    }
}
