<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentGetHandler extends Controller
{
    function show($product_id){
        //$comment = Comment::where('product_id', $id)->get();
        $comment = Comment::where('product_id', $product_id)->get();
        return $comment;
    }
}