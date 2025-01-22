<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar el formulario de creación de categorías
Route::get('/categoria/form', [CategoryController::class, 'form'])->name('categoria.form');

// Ruta para almacenar la categoría
Route::post('/categoria/store', [CategoryController::class, 'store'])->name('categoria.store');

// Ruta para ver el listado de categorías
Route::get('/categoria/index', [CategoryController::class, 'index'])->name('categoria.index');

Route::get('/categoria/formulario', [CategoryController::class, 'form'])->name('categoria.formulario');
