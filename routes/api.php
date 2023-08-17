<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1/customer')->group(function () {
    Route::get('/',[ CrudController::class, 'get']);
    Route::post('/',[ CrudController::class, 'create']);
    Route::get('/{id}',[ CrudController::class, 'getById']);
    Route::put('/{id}',[ CrudController::class, 'update']);
    Route::delete('/{id}',[ CrudController::class, 'delete']);
});


