<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CrudController extends Controller
{


    public function get()
    {
        $data = Customer::get();
        return response()->json($data, 200);
     
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            // $date['company_name'] = $request['company_name'];
            // $date['addres_email'] = $request['addres_email'];
            // $date['phone_number'] = $request['phone_number'];

            $data = [
                'company_name' => $request->company_name,
                'addres_email' => $request->addres_email,
                'phone_number' => $request->phone_number
            ];
            #Insert
            $customer = Customer::create($data);
            #Json
            return response()->json($customer, 200);
        } catch (\Throwable $not_create) {
            return response()->json(['NotFoundCrud CREATE' => $not_create->getMessage()], 400);
        }
    }


    /**
     * Select Id
     */
    public function getById($id)
    {
        try {
            $data = Customer::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $not_id) {
            return response()->json(['error' => $not_id->getMessage()], 400);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $date['company_name'] = $request['company_name'];
            $date['addres_email'] = $request['addres_email'];
            $date['phone_number'] = $request['phone_number'];
            Customer::find($id)->update($date);
            $inyect = Customer::find($id);
            return response()->json($inyect, 200);
        } catch (\Throwable $not_update) {
            return response()->json(['NotFoundCrud UPDATE' => $not_update->getMessage()], 400);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try {
            $delete = Customer::find($id)->delete();
            $customers = Customer::All();
            return response()->json(["customers" => $customers], 200);
        } catch (\Throwable $not_delete) {
            return response()->json(['NotFoundCrud Deleted' => $not_delete->getMessage()], 400);
        }
    }
}
