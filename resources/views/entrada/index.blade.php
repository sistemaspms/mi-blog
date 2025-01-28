<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Entradas</title>
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
<h1>Lista de Entradas</h1>

@if(session('success'))
    <div>
        <strong>{{ session('success') }}</strong>
    </div>
@endif

<table class="table">
    <thead>
    <tr>

        <th scope="col">Titulo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Contenido</th>
        <th scope="col">editar</th>

    </tr>
    </thead>
    <tbody>
    @foreach($entradas as $entrada)
        <tr>
            <td>{{ $entrada->titulo }}</td>
            <td>{{ $entrada->descripcion }}</td>
            <td>{{ $entrada->contenido }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
