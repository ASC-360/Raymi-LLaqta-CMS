<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria | Raymi Llaqta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-siderbar id="siderbar" />
    <main class="w-full mt-10 p-4">
        <h1 class="font-medium text-center text-3xl mb-2">Publicar una foto en la web</h1>
        <x-link href="{{ route('fotos.create') }}" class="w-full">Añadir una foto</x-link>

        <div class="grid grid-cols-1 gap-4">
            @forelse ($fotos as $foto)
                <div class="w-full bg-white shadow-2xl flex flex-col rounded-2xl p-4">
                    <div class="flex border-2 border-gray-300 w-full rounded-2xl p-4">
                        <div class="w-[75%]">
                            <h1 class="font-medium">ID:</h1>
                            <p>{{ $foto->id }}</p>
                            <h1 class="font-medium">Titulo:</h1>
                            <p class="break-words">{{ $foto->titulo }}</p>
                        </div>
                        <div class="flex justify-end flex-col">
                            <h1 class="font-medium">Vista de la imagen:</h1>
                            <img src="{{ asset('storage/' . $foto->ruta) }}" alt="img" class="h-50 rounded-2xl w-90 lg:w-80 lg:h-50">
                        </div>
                    </div>
                    <div class="border-2 border-gray-300 w-full rounded-2xl p-4 mt-2">
                        <h1 class="font-medium">Descripcion del post:</h1>
                        <p class="break-words">{{ $foto->descripcion }}</p>
                    </div>
                </div>

            @empty
                <div class="bg-white rounded-[10px] shadow-2xl border-2 border-gray-300 h-auto p-2 w-full mt-4">
                    <p class="text-center font-medium">No hay nada aqui</p>
                </div>
            @endforelse
        </div>

    </main>
</body>

</html>
