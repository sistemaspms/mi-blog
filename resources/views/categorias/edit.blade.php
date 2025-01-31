@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Editar Categoría</h1>


    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('categoria.update' , $categoria->id) }}">

        @csrf
@method('PATCH')

        <label for="nombre">Nombre de la Categoría:</label>
        <input type="hidden" value="{{$categoria->id}}" name="categoria_id"/>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe el nombre de la categoría" value="{{$categoria->nombre}}" required>
        @error('nombre')
        <span class="error">{{ $message }}</span>
        @enderror


        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="5" placeholder="Escribe una breve descripción de la categoría" required>{{$categoria->descripcion}}</textarea>
        @error('descripcion')
        <span class="error">{{ $message }}</span>
        @enderror


        <button type="submit">Actualizar Categoría</button>
    </form>
</div>

@endsection

