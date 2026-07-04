<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro | Raymi Llaqta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="p-2 flex items-center justify-center h-screen bg-cover bg-center">

        <form action="{{ route('register') }}" method="POST" id="registerForm">

            <x-ui.card class="flex flex-col gap-2 w-110! shadow-amber-900/50 shadow-2xl">
                @csrf

                {{-- LOGO --}}
                <a href="{{ route('home.view') }}" class="flex justify-center">

                    <img src="{{ asset('img/raymi-llaqta-logo.png') }}" class="h-10 md:h-12 object-contain"
                        alt="Raymi Llaqta">

                </a>


                {{-- TITULO --}}
                <h1 class="font-mono text-2xl text-center text-black">
                    Registro
                </h1>



                {{-- NOMBRE --}}
                @error('name')
                    <small class="text-red-500 text-center">
                        {{ $message }}
                    </small>
                @enderror

                <label for="name">
                    Ingrese sus nombres:
                </label>

                <x-ui.input type="text" placeholder="Nombre del usuario" name="name" />



                {{-- EMAIL --}}
                @error('email')
                    <small class="text-red-500 ">
                        {{ $message }}
                    </small>
                @enderror

                <label for="email">
                    Ingrese un correo:
                </label>

                <x-ui.input type="email" placeholder="ejemplo@gmail.com" name="email" />



                {{-- PASSWORD --}}
                @error('password')
                    <small class="text-red-500 ">
                        {{ $message }}
                    </small>
                @enderror

                <label for="password">
                    Ingrese una contraseña:
                </label>

                <x-ui.input type="password" placeholder="************" name="password" />



                {{-- CONFIRM PASSWORD --}}
                <label for="password_confirmation">
                    Confirme la contraseña:
                </label>

                <x-ui.input type="password" placeholder="************" name="password_confirmation" />



                {{-- LOGIN --}}
                <div class="flex gap-2 justify-center">

                    <p>
                        Ya tienes una cuenta?
                    </p>

                    <x-ui.link href="{{ route('login.view') }}"
                        class="font-medium cursor-pointer hover:text-amber-700 hover:underline">

                        Iniciar sesión

                    </x-ui.link>

                </div>



                {{-- BOTON --}}
                <x-ui.button type="submit" id="registerButton">

                    <span class="material-symbols-outlined">
                        account_circle
                    </span>

                    Registrarme

                </x-ui.button>
            </x-ui.card>


        </form>

    </div>


    <script>

        const form = document.getElementById('registerForm');
        const button = document.getElementById('registerButton');

        form.addEventListener('submit', () => {

            button.disabled = true;

            button.innerHTML = `
        <span class="material-symbols-outlined animate-spin">
            progress_activity
        </span>
        Registrando...
    `;

        });

    </script>
</body>

</html>