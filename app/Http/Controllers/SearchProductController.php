<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchProductController extends Controller
{
    function show($product_name){
        $product = Product::where('productName', 'LIKE', "%{$product_name}%")->get();
        return $product;

    }
}
