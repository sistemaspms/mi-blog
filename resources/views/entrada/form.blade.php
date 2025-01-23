
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Entradas</title>
    <style>
        /* General */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f8;
        }

        /* Container */
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #024CAA;
            font-size: 24px;
        }

        /* Labels */
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        input, textarea, select {
            width: 100%; /
            padding: 10px;
            margin-bottom: 15px; /* Añade espacio entre los campos */
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #024CAA; /* Cambia el color del borde  */
            outline: none;
            box-shadow: 0 0 4px rgba(0, 174, 255, 0.5);
        }

        /* Submit Button */
        button {
            width: 50%; /* tamaño del botón guardar */
            background-color: #024CAA;
            color: #ffffff;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #008ecc;
        }

        /* Error Messages */
        .error {
            color: #d9534f;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Formulario de Entradas</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('entrada.store') }}">
        @csrf <!-- Token de seguridad obligatorio -->

        <!-- Campo Nombre -->
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Escribe el titulo" value="{{ old('titulo') }}" required>
        @error('titulo')
        <span class="error">{{ $message }}</span>
        @enderror

        <!-- Campo Descripción -->
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="5" placeholder="Escribe una breve descripción" required>{{ old('descripcion') }}</textarea>
        @error('descripcion')
        <span class="error">{{ $message }}</span>
        @enderror

        <!-- Campo contenido -->
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="5" placeholder="Escribe el contenido del blog" required>{{ old('contenido') }}</textarea>
        @error('contenido')
        <span class="error">{{ $message }}</span>
        @enderror

        <select name="categoria_id" >
        @foreach($categorias as $categoria)
            <option value ="{{ $categoria->id }} ">{{$categoria->nombre}} </option>

        @endforeach
        </select>




        <!-- Campo Fecha de Publicación -->
        <label for="fecha_publicacion">Fecha de Publicación:</label>
        <input type="date" id="fecha_publicacion" name="fecha_publicacion" value="{{ old('fecha_publicacion') }}" required>
        @error('fecha_publicacion')
        <span class="error">{{ $message }}</span>
        @enderror

        <!-- Campo Estado -->
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="proceso" {{ old('estado') == 'proceso' ? 'selected' : '' }} selected>Proceso</option>
            <option value="finalizado" {{ old('estado') == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
        </select>


        <!-- Botón Guardar -->
        <button type="submit">Guardar Categoría</button>
    </form>
</div>

</body>
</html>
