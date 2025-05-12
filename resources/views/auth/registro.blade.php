<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro | Raymi Llaqta</title>
    @vite('resources/css/app.css')
</head>

<body>

    <img src="{{ asset('img/DSC_1739.JPG') }}" class="fixed inset-0 z-1 h-screen bg-cover bg-center w-full">
    <img src="{{ asset('img/DSC_1763.JPG') }}" class="fixed inset-0 z-1 h-screen bg-cover bg-center w-full lg:hidden">

    <div class="p-2 flex items-center justify-center h-screen bg-cover bg-center">

        <form action="{{ route('register') }}" method="POST"
            class="bg-white/60 backdrop-blur-[5px] shadow-2xl w-110 p-4 rounded-2xl flex flex-col gap-2 border-white border-3 z-100">
            @csrf

            {{-- Titulo --}}
            <h1 class="font-bold text-2xl text-center text-black">Registro</h1>

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

            {{-- Verificar si tiene una cuenta --}}
            <div class="flex gap-2 justify-center">
                <p>Ya tienes una cuenta?</p>
                <a href="{{ route('login.view') }}"
                    class="font-medium cursor-pointer decoration-1 hover:text-red-700 hover:underline">Iniciar
                    sesion</a>
            </div>

            {{-- Enviar el formulario --}}
            <x-button type="submit">Registrarme</x-button>
        </form>
    </div>
</body>

</html>
