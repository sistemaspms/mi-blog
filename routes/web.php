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
Route::get('/categria/editar/{idCategoria}', [CategoryController::class, 'editar'])->name('categoria.editar');
Route::patch('/categoria/update/{idCategoria}', [CategoryController::class, 'update'])->name('categoria.update');
Route::delete('categoria/destroy/{idCategoria}', [CategoryController::class, 'destroy'])->name('categoria.destroy');

// Rutas para Entradas
Route::get('/entrada/form', [EntradaController::class, 'form'])->name('entrada.form');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entrada.store');
Route::get('/entrada/index', [EntradaController::class, 'list'])->name('entrada.index');
Route::get('/entrada/editar/{idEntrada}' , [EntradaController::class, 'editar'])->name('entrada.editar');
Route::patch('/entrada/update/{id}', [EntradaController::class, 'update'])->name('entrada.update');
Route::delete('/entrada/destroy/{idEntrada}', [EntradaController::class, 'destroy'])->name('entrada.destroy');
