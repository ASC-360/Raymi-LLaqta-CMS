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

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="bg-fondo p-2 flex items-center justify-center h-screen bg-cover bg-center">
        <form action="{{ route('register') }}" method="POST"
            class="bg-white/60 backdrop-blur-[5px] shadow-2xl w-110 p-4 rounded-2xl flex flex-col gap-2 border-white border-3">
            @csrf

            {{-- Titulo --}}
            <h1 class="font-bold text-2xl text-center text-black">Registro</h1>

            {{-- Nombre del usuario --}}
            <label for="name">Ingrese sus nombres:</label>
            <x-input type="text" placeholder="Nombre del usuario" name="name" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- Correo del usuario --}}
            <label for="email">Ingrese un correo:</label>
            <x-input type="email" placeholder="ejemplo@gmail.com" name="email" />
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- Contraseña del usuario --}}
            <label for="contraseña">Ingrese una contraseña:</label>
            <x-input type="password" placeholder="************" name="password"></x-input>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

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
