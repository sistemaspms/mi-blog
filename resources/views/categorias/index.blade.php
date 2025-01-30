<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Categorías</title>
</head>
<style>
    body{
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    margin:0;
    padding:20px;
    }
    h1{

    }

</style>

<body>
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
</body>
</html>

