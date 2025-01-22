<?php
namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index()
    {

        $entrada = Entrada::all();
         dd($entrada);

        return view('entrada.index', compact('entrada'));
    }

    public function form()
    {
        return view('entrada.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
        ]);

        try {
            // Inserción en la base de datos
            Entrada::create($validated);

            // Redireccionar con mensaje de éxito
            return redirect()->route('entrada.index')->with('success', 'Entrada creada exitosamente.');
        } catch (\Exception $e) {
            // Manejo de errores en caso de que ocurra un problema con la base de datos
            return redirect()->back()->withErrors('Error al crear la categoría. Por favor, inténtalo de nuevo.');
        }
    }
}
