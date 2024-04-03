<?php

namespace App\Http\Controllers;
use App\Models\Product;

abstract class Controller
{
    public function listProduct()
    {
        $product = Product::select('title','slug')->get();
       
        return $product;
    }
}
