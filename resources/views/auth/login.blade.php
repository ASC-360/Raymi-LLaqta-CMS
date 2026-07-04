<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion | Raymi Llaqta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="p-2 flex items-center justify-center h-screen bg-cover bg-center">

        <form action="{{ route('login') }}" method="POST" id="loginForm">

            <x-ui.card class="flex flex-col gap-2 w-110! shadow-amber-900/50 shadow-2xl">

                @csrf

                {{-- LOGO --}}
                <a href="{{ route('home.view') }}" class="flex justify-center">
                    <img src="{{ asset('img/raymi-llaqta-logo.png') }}" class="h-10 md:h-12 object-contain"
                        alt="Raymi Llaqta">
                </a>

                {{-- TITULO --}}
                <h1 class="font-mobno text-2xl text-center text-black">
                    Iniciar sesión
                </h1>

                @error('email')
                    <small class="text-red-500 text-center">
                        {{ $message }}
                    </small>
                @enderror

                <label for="email">
                    Ingrese su correo:
                </label>

                <x-ui.input type="email" placeholder="ejemplo@gmail.com" name="email" required />


                @error('password')
                    <small class="text-red-500 text-center">
                        {{ $message }}
                    </small>
                @enderror


                <label for="password">
                    Ingrese su contraseña:
                </label>

                <x-ui.input type="password" placeholder="************" name="password" required />


                <div class="flex gap-2 justify-center">

                    <p>
                        No tienes una cuenta?
                    </p>

                    <x-ui.link href="{{ route('register.view') }}"
                        class="font-medium cursor-pointer hover:text-amber-700 hover:underline">
                        Crear cuenta
                    </x-ui.link>

                </div>


                <x-ui.button type="submit" id="loginButton">
                    <span class="material-symbols-outlined">
                        login
                    </span>

                    Iniciar sesión
                </x-ui.button>


            </x-ui.card>

        </form>

    </div>


    <script>
        const form = document.getElementById('loginForm');
        const button = document.getElementById('loginButton');

        form.addEventListener('submit', () => {

            button.disabled = true;

            button.innerHTML = `
            <span class="material-symbols-outlined animate-spin">
                progress_activity
            </span>
            Ingresando...
        `;

        });
    </script>
</body>

</html>