<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BancoController;

Route::get('/banco', [BancoController::class, 'index']);
Route::post('/banco', [BancoController::class, 'store']);
Route::put('/banco/{id}',[BancoController::class , 'atualizar']);
Route::delete('banco/{id}', [BancoController::class , 'apagar']);