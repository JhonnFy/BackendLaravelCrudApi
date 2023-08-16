<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function view_index(){
        $tbl_customers = Customer::all();
        return view('index', ['tbl_customers' => $tbl_customers]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'company_name' => 'required',
            'addres_email' => 'required',
            'phone_number' => 'required',
        ]);

        $newCustomer = Customer::create($data);

        return redirect(route('customer.index'));

    }


    public function destroy(Customer $customer){
        $customer->delete();
    }

}

