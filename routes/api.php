<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/empleados',[EmpleadosController::class,'index']);
Route::get('/empleado/{id}',[EmpleadosController::class,'show']); //Un empleado en específico
Route::post('/agregar',[EmpleadosController::class,'create']); //Agregar un nuevo empleado
Route::put('/empleados/{id}', [EmpleadosController::class, 'update']);//Actualizar
Route::delete('/empleados/{id}', [EmpleadosController::class, 'destroy']);//Eliminar