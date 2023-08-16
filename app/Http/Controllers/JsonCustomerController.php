<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class JsonCustomerController extends Controller
{
    public function JsonCustomer(){

        $customer = Customer::all();

        $outBooktoview = collect();

        
        foreach($customer as $Customer){
            $outBooktoview->add([
                        'id' => $Customer->id,
                        'company_name' =>$Customer->company_name,
                        'addres_email' => $Customer->addres_email,
                        'phone_number' => $Customer->phone_number,
            ]);
        }
        
        return response()->json([
            'outBooktoview' => $outBooktoview
        ], 200);


    }
}
