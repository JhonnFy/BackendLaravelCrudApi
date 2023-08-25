<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\OrderProductController;

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

#Route::(PostMan) http://127.0.0.1:8000/api/customers/
Route::prefix('/customers')->group(function () {
    Route::get('/',[ CustomerController::class, 'get']);
    Route::post('/',[ CustomerController::class, 'create']);
    Route::get('/{id}',[ CustomerController::class, 'getById']);
    Route::put('/{id}',[ CustomerController::class, 'update']);
    Route::delete('/{id}',[ CustomerController::class, 'delete']);
});


#Route::(PostMan) http://127.0.0.1:8000/api/orders/
Route::prefix('/orders')->group(function () {
    Route::get('/',[ OrderController::class, 'get']);
    Route::post('/',[ OrderController::class, 'create']);
    Route::get('/{id}',[ OrderController::class, 'getById']);
    Route::put('/{id}',[ OrderController::class, 'update']);
    Route::delete('/{id}',[ OrderController::class, 'delete']);
});


