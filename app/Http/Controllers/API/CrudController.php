<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CrudController extends Controller
{

    /**
     * Select ID
    */
    public function get()
    {
        $data = Customer::get();
        $customers = Customer::all();
        return response()->json(["customers" => $customers], 200);
     
    }

    /**
     * InsertID
    */
    public function create(Request $request)
    {
            #Array
            $data = [
                'company_name' => $request->company_name,
                'addres_email' => $request->addres_email,
                'phone_number' => $request->phone_number
            ];
            #Insert
            $customer = Customer::create($data);
            #Json
            #return response()->json($customer, 201);
            $customers = Customer::all();
            return response()->json(["customers" => $customers], 200);
    }

    /**
     * Select Id
     */
    public function getById($id)
    {
        $data = Customer::find($id);
        #Json
        $customers = Customer::all();
        return response()->json(["customers" => $customers], 200);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data['company_name'] = $request['company_name'];
            $data['addres_email'] = $request['addres_email'];
            $data['phone_number'] = $request['phone_number'];
            Customer::find($id)->update($data);
            $inyect = Customer::find($id);
            
            $customers = Customer::all();
            return response()->json(["customers" => $customers], 200);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $delete = Customer::find($id)->delete();
            $customers = Customer::All();
            return response()->json(["customers" => $customers], 200);
    }
}
