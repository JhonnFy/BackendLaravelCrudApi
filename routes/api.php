<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CrudController;

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
    Route::get('/',[ CrudController::class, 'get']);
    Route::post('/',[ CrudController::class, 'create']);
    Route::get('/{id}',[ CrudController::class, 'getById']);
    Route::put('/{id}',[ CrudController::class, 'update']);
    Route::delete('/{id}',[ CrudController::class, 'delete']);
});