<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#Route::(PostMan) 
Route::prefix('/customers')->group(function () {
    Route::get('/',[ CustomerController::class, 'get']);
    Route::post('/',[ CustomerController::class, 'create']);
    Route::get('/{id}',[ CustomerController::class, 'getById']);
    Route::put('/{id}',[ CustomerController::class, 'update']);
    Route::delete('/{id}',[ CustomerController::class, 'delete']);
});

// {
//     "company_name": "opq",
//     "addres_email": "opq@gmail.com",
//     "phone_number": "1234567"
// }
