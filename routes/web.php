<?php

use App\Http\Controllers\Configuracio\UsuarioController;
use App\Http\Controllers\Resumen\ComercioController;
use App\Http\Controllers\Resumen\EstadoController;
use App\Http\Controllers\Resumen\RegaliasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('resumen.estado');
})->name('inicio');

// Route::/*middleware(['auth', 'verified'])->*/group(function () {
    Route::get('/resumen/estado', [EstadoController::class, 'estado'])/*->middleware('permission:resumen.regalias')*/->name('resumen.estado');
    Route::get('/resumen/regalias', [RegaliasController::class, 'regalias'])/*->middleware('permission:resumen.regalias')*/->name('resumen.regalias');
    Route::get('/resumen/comercio', [ComercioController::class, 'comercio'])/*->middleware('permission:resumen.regalias')*/->name('resumen.comercio');

// });


Route::get('/config/usuarios', [UsuarioController::class, 'listado'])/*->middleware('permission:resumen.regalias')*/->name('config.usuarios');
