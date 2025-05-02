<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir barrio | Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="bg-fondo p-2 flex items-center justify-center h-screen bg-cover bg-center">

        {{-- Formulario --}}
        <form action="{{ route('barrios.store') }}" method="POST"
            class="bg-white/60 backdrop-blur-[5px] shadow-2xl w-110 p-4 rounded-2xl flex flex-col gap-2 border-white border-3">
            @csrf

            {{-- Titulo --}}
            <h1 class="font-bold text-2xl text-center text-black">Añadir barrio</h1>

            {{-- Nombre del barrio --}}
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="name">Ingrese el nombre del barrio</label>
            <x-input type="text" placeholder="Nombre del barrio" name="name" />

            {{-- Enviar el formulario --}}
            <x-button type="submit">Añadir barrio</x-button>
        </form>
    </div>
</body>

</html>
