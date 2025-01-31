@extends('layouts.dashboard')
@section('content')
<h1>Lista de Entradas</h1>

@if(session('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>>
@endif

<table class="table">
    <thead>
    <tr>

        <th scope="col">Titulo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Contenido</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>

    </tr>
    </thead>
    <tbody>

    @foreach($entradas as $entrada)
        <tr>
            <td>{{ $entrada->titulo }}</td>
            <td>{{ $entrada->descripcion }}</td>
            <td>{{ $entrada->contenido }}</td>
            <td>
                <a href="{{route('entrada.editar', $entrada->id)}}" class="btn btn-primary">
                    editar
                </a>

            </td>

            <td>

                <form action="{{ route('entrada.destroy', $entrada->id) }}" method="POST">
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
