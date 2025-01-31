<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <style>

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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MI BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       CATEGORIAS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('categoria.form')}}">CREAR</a></li>
                        <li><a class="dropdown-item" href="{{route('categoria.index')}}">LISTADO</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       ENTRADAS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('entrada.form')}}">CREAR</a></li>
                        <li><a class="dropdown-item" href="{{route('entrada.index')}}">LISTADO</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>