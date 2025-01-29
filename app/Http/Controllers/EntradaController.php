<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function list()
    {

        $entradas = Entrada::all();



        return view('entrada.index', compact('entradas'));
    }

    public function form()
    {
        $categorias = Category::all();

        return view('entrada.form' , compact('categorias'));

    }

    public function store(Request $request , )
    {

        try {
            // Inserción en la base de datos
            $nuevaEntrada = new Entrada();
            $nuevaEntrada->titulo = $request->input('titulo');
            $nuevaEntrada->descripcion = $request->input('descripcion');
            $nuevaEntrada->contenido = $request->input('contenido');
            $nuevaEntrada->categoria_id = $request->input('categoria_id');
            $nuevaEntrada->fecha_publicacion = $request->input('fecha_publicacion');
            $nuevaEntrada->estado = $request->input('estado');
            $nuevaEntrada->usuario_id = 1;
            $nuevaEntrada->save();

            return redirect()->route('entrada.index')->with('success', 'Entrada creada exitosamente.');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors('Error al crear la entrada. Por favor, inténtalo de nuevo.');
        }
    }

    public function editar($idEntrada){

        $categorias = Category::all();
        $entrada = Entrada::where('id', $idEntrada)->first();

      return view('entrada.edit', compact('categorias', 'entrada'));
    }

    public function update(Request $request, $idEntrada)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'contenido' => 'nullable|string|max:500',
            'categoria_id' => 'nullable|integer',
            'fecha_publicacion' => 'nullable|date',
            'estado' => 'nullable|string|max:500',
        ]);

        try{
            $entrada = Entrada::where('id', $idEntrada)->first();
             $entrada->update($validated);

          return redirect()->route('entrada.index')->with('success', 'Entrada actualizada exitosamente.');
             } catch (\Exception $e) {
            return redirect()->back()->withErrors( 'Error');

            }

    }


}
