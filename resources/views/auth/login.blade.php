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
    <div class="bg-fondo p-2 flex items-center justify-center h-screen bg-cover bg-center">
        <form action="{{ route('login') }}" method="POST" class="bg-white/60 backdrop-blur-[5px] shadow-2xl w-110 p-4 rounded-2xl flex flex-col gap-2 border-white border-3">
            @csrf
            <h1 class="font-bold text-2xl text-center text-black">Iniciar sesion</h1>
            <label for="email" >Ingrese su correo:</label>
            <x-input type="email" placeholder="ejemplo@gmail.com" name="email" />
            <label for="password">Ingrese su contraseña:</label>
            <x-input type="password" placeholder="************" name="password"></x-input>
            <div class="flex gap-2 justify-center">
                <p>No tienes una cuenta?</p>
                <a href="{{ route('register.view') }}" class="font-medium cursor-pointer decoration-1 hover:text-red-700 hover:underline">Crear cuenta</a>
            </div>
            <x-button type="submit">Iniciar sesion</x-button>
        </form>
    </div>
</body>

</html>
