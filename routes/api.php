<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Models\Empleados;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('Empleados', [EmpleadosController::class, 'index']);
Route::get('Empleados/{id}', [EmpleadosController::class, 'show']);
Route::post('Empleados', [EmpleadosController::class, 'store']);
Route::put('Empleados/{empleado}', [EmpleadosController::class, 'update']);
Route::delete('Empleados/{id}', [EmpleadosController::class, 'destroy']);
