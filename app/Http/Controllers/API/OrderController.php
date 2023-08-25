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


    /**
     * InsertID
    */
    public function create(Request $request)
    {
            #Array
            $data = [
                'date_order' => $request->date_order,
                'pay_day' => $request->pay_day,
                'discount' => $request->discount,
                'shipment_city' => $request->shipment_city,
                'customer_id' => $request->customer_id
            ];
            #Insert
            $orders = Order::create($data);
            #Json
            #return response()->json($customer, 201);
            $orders = Order::all();
            return response()->json(["orders" => $orders], 200);
    }

    /**
    * Select Id
    */
    public function getById($id)
    {
        $data = Order::find($id);
        #Json
        $orders = Order::all();
        return response()->json(["orders" => $orders], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $data['date_order'] = $request['date_order'];
            $data['pay_day'] = $request['pay_day'];
            $data['discount'] = $request['discount'];
            $data['shipment_city'] = $request['shipment_city'];
            Order::find($id)->update($data);
            $inject = Order::find($id);
            
            $orders = Order::all();
            return response()->json(["orders" => $orders], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
            $delete = Order::find($id)->delete();
            $orders = Order::All();
            return response()->json(["orders" => $orders], 200);
    }

}
