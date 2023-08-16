<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CrudController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('v1/customer')->group(function () {
    Route::get('/',[CrusController::class, 'get']);
    Route::post('/',[CrusController::class, 'create']);
    Route::get('/{id}',[CrusController::class, 'getById']);
    #Update
    Route::put('/{id}',[CrusController::class, 'update']);
    Route::delete('/{id}',[CrusController::class, 'delete']);
});