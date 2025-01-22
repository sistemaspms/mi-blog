<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
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
    <div>
        <strong>{{ session('success') }}</strong>
    </div>
@endif

<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->descripcion }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

