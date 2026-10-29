<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>@yield('titulo') - Biblioteca</title>
</head>
<body>
    <header>
        <h1>Biblioteca</h1>
        <p>Libros disponibles</p>
    </header>

    <main>
        @yield('contenido')
    </main>
</body>
</html>