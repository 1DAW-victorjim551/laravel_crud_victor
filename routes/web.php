<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit']);
Route::get('/usuarios/{id}/delete', [UsuarioController::class, 'edit']);

