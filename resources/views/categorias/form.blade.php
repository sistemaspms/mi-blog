@extends('layouts.dashboard')
@section('content')

<div class="container">
    <h1>Formulario de Categorías</h1>

    <!-- Mensajes de error (Laravel Validation) -->
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('categoria.store') }}">
        @csrf <!-- Token de seguridad obligatorio -->

        <!-- Campo Nombre -->
        <label for="nombre">Nombre de la Categoría:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe el nombre de la categoría" value="{{ old('nombre') }}" required>
        @error('nombre')
        <span class="error">{{ $message }}</span>
        @enderror

        <!-- Campo Descripción -->
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="5" placeholder="Escribe una breve descripción de la categoría" required>{{ old('descripcion') }}</textarea>
        @error('descripcion')
        <span class="error">{{ $message }}</span>
        @enderror

        <!-- Botón Guardar -->
        <button type="submit">Guardar Categoría</button>
    </form>
</div>

@endsection