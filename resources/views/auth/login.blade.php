<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion | Raymi Llaqta</title>
    @vite('resources/css/app.css')
</head>

<body>

    <img src="{{ asset('img/DSC_1734.JPG') }}" class="fixed inset-0 z-1 h-screen bg-cover bg-center w-full">
    <img src="{{ asset('img/DSC_1821.JPG') }}" class="fixed inset-0 z-1 h-screen bg-cover bg-center w-full lg:hidden">

    {{-- Contenedor padre para centrar el formulario --}}
    <div class="bg-fondo p-2 flex items-center justify-center h-screen bg-cover bg-center">

        {{-- Formulario --}}
        <form action="{{ route('login') }}" method="POST"
            class="bg-white/60 backdrop-blur-[5px] shadow-2xl w-110 p-4 rounded-2xl flex flex-col gap-2 border-white border-3 z-100">

            {{-- Proteccion CSRF --}}
            @csrf

            {{-- Titulo del formulario --}}
            <h1 class="font-bold text-2xl text-center text-black">Iniciar sesion</h1>

            {{-- Mensaje de error de email --}}
            @error('email')
                <span class="text-red-500 text-center">{{ $message }}</span>
            @enderror

            {{-- Ingresar correo --}}
            <label for="email">Ingrese su correo:</label>
            <x-input type="email" placeholder="ejemplo@gmail.com" name="email" required />

            {{-- Mensajde de error de la contraseña --}}
            @error('password')
                <span class="text-red-500 text-center">{{ $message }}</span>
            @enderror

            {{-- Ingresar contraseña --}}
            <label for="password">Ingrese su contraseña:</label>
            <x-input type="password" placeholder="************" name="password" required />

            {{-- Verificar si el usuario tiene una cuenta --}}
            <div class="flex gap-2 justify-center">
                <p>No tienes una cuenta?</p>

                {{-- Ir a este link si no tiene cuenta --}}
                <a href="{{ route('register.view') }}"
                    class="font-medium cursor-pointer decoration-1 hover:text-red-700 hover:underline">Crear cuenta</a>
            </div>

            {{-- Enviar formulario --}}
            <x-button type="submit">Iniciar sesion</x-button>
        </form>
    </div>
</body>

</html>
