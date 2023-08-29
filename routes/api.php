<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', [ClienteController::class, 'index']); //Rota principal
Route::post('/clientes', [ClienteController::class, 'store']); //Envia para o BD
Route::get('clientes', [ClienteController::class, 'show']); // Trazer informações do BD