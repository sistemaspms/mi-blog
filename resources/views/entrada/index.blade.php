<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
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

<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Contenido</th>
    </tr>
    </thead>
    <tbody>

    @foreach($entradas as $entrada)
        <tr>
        <td>{{$entrada->titulo}}</td>
        <td>{{$entrada->descripcion}}</td>
            <td>{{$entrada->contenido}}</td>
        </tr>
    @endforeach


    </tbody>
</table>
</body>
</html>
