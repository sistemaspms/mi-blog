<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entrada;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categorias = Category::all();


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
            Category::create($validated);

            return redirect()->route('categoria.index')->with('success', 'Categoría creada exitosamente.');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors('Error al crear la categoría. Por favor, inténtalo de nuevo.');
        }
    }

    public function editar($idCategoria){

        $categoria = Category::where('id', $idCategoria)->first();


     return view('categorias.edit' , compact('categoria'));
    }

    public function update(Request $request , $idCategoria)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500'
        ]);


             try {
                 $categoria = Category::where('id', $idCategoria)->first();
                 $categoria->update($validated);

                 return redirect()->route('categoria.index')->with('success', 'Categoría actualizada exitosamente.');
             } catch (\Exception $e) {
                 return redirect()->back()->withErrors('Error . Por favor, inténtalo de nuevo.');

             }
    }
   public function destroy($id)
   {
       $categoria = Category::findOrFail($id);
       $categoria->delete();

       return redirect()->route( 'categoria.index')->with('success', 'Categoria eliminada exitosamente.');

   }

}
