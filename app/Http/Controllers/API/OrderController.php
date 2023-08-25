<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Select ID
    */
    public function get()
    {
        $data = Order::get();
        $orders = Order::all();
        return response()->json(["orders" => $orders], 200);
     
    }
}
