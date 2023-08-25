<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use Illuminate\Http\Request;


class OrderProductController extends Controller
{
    /**
     * Select ID
    */
    public function get()
    {
        $op = OrderProduct::all();
        return response()->json(["ordersproducts" => $op], 200);
     
    }
}
