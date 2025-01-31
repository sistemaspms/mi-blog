@extends('layouts.dashboard')
@section('content')
<h1>Lista de Categorías</h1>

@if(session('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
     </div>
 @endif

 <table class="table">
     <thead>
     <tr>

         <th scope="col">Categoria</th>
         <th scope="col">Descripción</th>
         <th scope="col">Editar</th>
         <th scope="col"> Eliminar</th>
     </tr>
     </thead>
     <tbody>
     @foreach($categorias as $categoria)
         <tr>
             <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->descripcion }}</td>
            <td>
                <a href="{{route('categoria.editar', $categoria->id)}}" class="btn btn-primary">
                    editar
                </a>
            </td>

             <td>
                 <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Eliminar</button>
                 </form>
             </td>
        </tr>
    @endforeach
    </tbody>
</table>
    @endsection


