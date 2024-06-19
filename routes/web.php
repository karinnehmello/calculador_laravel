<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', [CalculadoraController::class, 'index']);
Route::get('/create', [CalculadoraController::class, 'create']);
Route::post('/store', [CalculadoraController::class, 'store']);
