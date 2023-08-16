<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonCustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [CustomerController::class,'view_index'])->name('customer.index');
Route::post('/customer/create', [CustomerController::class,'store'])->name('customer.store');


#Json
Route::get('/JsonCustomer',[JsonCustomerController::class,'JsonCustomer'])->name('customer.json');
