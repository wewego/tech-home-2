<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class SearchCategoryController extends Controller
{
    function show($category_id){
        $category = ProductCategory::where('category_id', $category_id)->get();
        return $category;
    }
}
