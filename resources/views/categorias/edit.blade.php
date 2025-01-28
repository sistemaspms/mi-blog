<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Categorías</title>
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

        /* Input Fields */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }

        /* Focus Styles */
        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #024CAA;
            box-shadow: 0 0 5px rgba(2, 76, 170, 0.2);
        }

        /* Submit Button */
        button {
            width: 100%;
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
            background-color: #023b8e;
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

</body>
</html>

