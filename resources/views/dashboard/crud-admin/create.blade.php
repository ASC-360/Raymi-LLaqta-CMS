<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear usuario | Raymi Llaqta</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="bg-fondo p-2 flex items-center justify-center h-screen bg-cover bg-center">

        {{-- Formulario --}}
        <form action="{{ route('dashboard-admin.store') }}" method="POST"
            class="bg-white/60 backdrop-blur-[5px] shadow-2xl w-110 p-4 rounded-2xl flex flex-col gap-2 border-white border-3">
            @csrf

            {{-- Titulo --}}
            <h1 class="font-bold text-2xl text-center text-black">Crear adminitrador</h1>

            {{-- Nombre del usuario --}}
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="name">Ingrese sus nombres:</label>
            <x-input type="text" placeholder="Nombre del usuario" name="name" />


            {{-- Correo del usuario --}}
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="email">Ingrese un correo:</label>
            <x-input type="email" placeholder="ejemplo@gmail.com" name="email" />


            {{-- Contraseña del usuario --}}
            @error('password')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="contraseña">Ingrese una contraseña:</label>
            <x-input type="password" placeholder="************" name="password"></x-input>

            {{-- Confirmar contraseña --}}
            <label for="password_confirmation">Confirme la contraseña:</label>
            <x-input type="password" placeholder="************" name="password_confirmation"></x-input>

            {{-- Enviar el formulario --}}
            <x-button type="submit">Crear administrador</x-button>
        </form>
    </div>
</body>

</html>
