<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categorias = Category::all();
        dd($categorias);

        return view('categorias.index', compact('categorias'));
    }

    public function form()
    {
        return view('categorias.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
        ]);

        try {
            // Inserción en la base de datos
            Category::create($validated);

            // Redireccionar con mensaje de éxito
            return redirect()->route('categoria.index')->with('success', 'Categoría creada exitosamente.');
        } catch (\Exception $e) {
            // Manejo de errores en caso de que ocurra un problema con la base de datos
            return redirect()->back()->withErrors('Error al crear la categoría. Por favor, inténtalo de nuevo.');
        }
    }
}
