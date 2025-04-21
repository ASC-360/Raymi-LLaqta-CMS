<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $foto->titulo . ' | Raymi LLaqta'}}</title>
    @vite(['resources/css/app.css', 'resources/js/img.js'])
</head>
<body class="bg-black">
    <div class="flex items-center justify-center h-screen flex-col">
        <img id="img_show" src="{{ asset('storage/' . $foto->ruta) }}" alt="img" class="h-80 w-full transition-transform duration-300 ease-in-out cursor-pointer lg:h-180">
        <div class="text-white bg-black/60 p-3 w-full mt-4 fixed z-10 bottom-0" id="f">
            <h1 class="font-medium">Titulo:</h1>
            <p>{{ $foto->titulo }}</p>
            <h1 class="font-medium">Descripcion:</h1>
            <p>{{ $foto->descripcion }}</p>
        </div>
    </div>
</body>
</html>
