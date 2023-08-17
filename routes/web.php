<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CrudController;

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

Route::prefix('/customer')->group(function () {
    Route::get('/',[CrudController::class, 'get']);
    Route::post('/',[CrudController::class, 'create']);
    Route::delete('/{id}',[CrudController::class, 'delete']);
    Route::get('/{id}',[CrudController::class, 'getById']);
    Route::put('/{id}',[CrudController::class, 'update']);
});


