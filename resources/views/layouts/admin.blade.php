<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">

    {{-- Titulo dinamico --}}
    <title>@yield('title')</title>

    {{-- Llamar al CSS y JS con Vite dinamicamente --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark:bg-gray-800">

    {{-- Siderbar dinamico --}}
    <x-siderbar />

    <button class="absolute top-1 right-1 z-100 p-2 hover:bg-gray-200 rounded-full flex items-center gap-2 dark:text-white hover:dark:bg-gray-900" id="toogle_boton"><span class="material-symbols-outlined">
            dark_mode
        </span></button>


    {{-- Contenido dinamico --}}
    <main class="mx-4">
        @yield('content')
    </main>


</body>

</html>
