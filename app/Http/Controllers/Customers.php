<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customers extends Controller
{
    public function index(){
        return view ('index');
    }
}
