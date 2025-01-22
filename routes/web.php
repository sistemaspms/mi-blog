<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntradaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Rutas para Categorías
Route::get('/categoria/form', [CategoryController::class, 'form'])->name('categoria.form');
Route::post('/categoria/store', [CategoryController::class, 'store'])->name('categoria.store');
Route::get('/categoria/index', [CategoryController::class, 'index'])->name('categoria.index');

// Rutas para Entradas
Route::get('/entrada/form', [EntradaController::class, 'form'])->name('entrada.form');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entrada.store');
Route::get('/entrada/index', [EntradaController::class, 'index'])->name('entrada.index');
