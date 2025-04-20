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
    <button id="button_siderbar"
        class="font-bold p-2 transition-all duration-150 cursor-pointer hover:bg-gray-400">X</button>
    <x-siderbar id="siderbar" />
    <main class="w-full">
        <x-link href="{{ route('fotos.create') }}">Añadir una foto</x-link>

        @forelse ($fotos as $foto)
            <div class="flex bg-white shadow-2xl p-2 rounded-2xl border-2 border-black mx-2 my-2 ">
                <div class="w-[100%]">
                    <p>ID de imagen: </p>
                    <li>{{ $foto->id }}</li>
                    <p>Titulo:</p>
                    <li>{{ $foto->titulo }}</li>
                    <p>Descripcion:</p>
                    <li>{{ $foto->descripcion }}</li>
                    <div class="flex gap-2 items-center">
                        <a href=""
                            class="bg-transparent text-black border-black border-2 py-1 px-2 rounded-[10px] transition-all duration-100 hover:bg-black hover:text-white font-medium">Editar</a>
                        <a href=""
                            class="bg-transparent text-red-500 border-red-500 border-2 py-1 px-2 rounded-[10px] transition-all duration-100 hover:bg-red-500 hover:text-white font-medium">Eliminar</a>
                    </div>
                </div>
                <div class="w-[70%]">
                    <img src="{{ asset('storage/' . $foto->ruta) }}" alt="{{ $foto->titulo }}"
                        class="h-full rounded-2xl">
                </div>
            </div>
        @empty
            <div class="bg-white rounded-[10px] shadow-2xl p-2 w-full h-100">
                <p class="text-center font-medium">No hay nada aqui</p>
            </div>
        @endforelse
    </main>
</body>

</html>
