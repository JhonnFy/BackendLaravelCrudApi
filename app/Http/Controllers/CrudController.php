<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Json
    }

    public function get(){
        try { 
            $data = Customer::get();
            return response()->json($data, 200);
        } catch (\Throwable $not_get) {
            return response()->json([ 'error' => $not_get->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try{
            $date['company_name'] = $request['company_name'];
            $date['addres_email'] = $request['addres_email'];
            $date['phone_number'] = $request ['phone_number'];
            #Insert
            $inyect = Customer::create($date);
            #Json
            return response()->json($inyect, 200);
        }catch(\Throwable $not_create){
            return response()->json(['not found' => $not_create->getMessage()],500);
        }
    }

     /**
     * Select Id
     */
    public function getById($id){
        try{
            $date = Customer::find($id);
            return response()->json($date, 200);
        }catch(\Throwable $not_id){

        }
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $date['company_name'] = $request['company_name'];
            $date['addres_email'] = $request['addres_email'];
            $date['phone_number'] = $request ['phone_number'];
            Customer::find($id)->update($date);
            $inyect = Customer::find($id);
            return response()->json($inyect, 200);
        }catch(\Throwable $not_update){
            return response()->json(['not found' => $not_update->getMessage()],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try{
            $inyect = Customer::find($id)->delete();
            return response()->json(["deleted" => $inyect], 200);
        }catch(\Throwable $not_delete){
            return response()->json(['not found' => $not_delete->getMessage()],500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

}
