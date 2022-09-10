<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderGetHandler extends Controller
{
    function show($user_id){
        $order = Order::where('user_id', $user_id)->get();
        return $order;
    }
}
