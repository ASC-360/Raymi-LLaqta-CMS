<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raymi Llaqta de Chachapoyas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>

<body class="w-full">

    <!-- HEADER -->
    <header class="bg-white shadow-md">
        <nav class="flex items-center justify-between px-4 py-3">

            <!-- LOGO -->
            <a href="{{ route('home.view') }}">
                <img src="{{ asset('img/raymi-llaqta-logo.png') }}" class="h-10 md:h-12" alt="Raymi Llaqta">
            </a>

            <!-- DESKTOP NAV -->
            <ul class="hidden md:flex items-center gap-6 text-gray-700 font-medium">

                <li>
                    <x-ui.link href="{{ route('home.view') }}" class="hover:text-amber-900">
                        Inicio
                    </x-ui.link>
                </li>

                <li>
                    <x-ui.link href="{{ route('publications.view') }}" class="hover:text-amber-900">
                        Posts
                    </x-ui.link>
                </li>

                {{-- DASHBOARD SOLO ADMIN --}}
                @auth
                    @if(auth()->user()->role === 'admin')
                        <li>
                            <x-ui.link href="{{ route('dashboard.admin.view') }}" class="hover:text-amber-900">
                                Dashboard
                            </x-ui.link>
                        </li>
                    @endif
                @endauth

                {{-- SI NO ESTA LOGEADO --}}
                @guest
                    <div class="flex gap-2">
                        <x-ui.button>
                            <a href="{{ route('login.view') }}">
                                Iniciar sesión
                            </a>
                        </x-ui.button>

                        <x-ui.button class="bg-white text-amber-900! border border-amber-900 hover:bg-amber-100!">
                            <a href="{{ route('register.view') }}">
                                Registrarse
                            </a>
                        </x-ui.button>
                    </div>
                @endguest

                {{-- SI ESTA LOGEADO --}}
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <x-ui.button type="submit" class="text-red-600 hover:text-red-800">
                                Cerrar sesión
                            </x-ui.button>
                        </form>
                    </li>
                @endauth
            </ul>

            <!-- MOBILE BUTTON -->
            <x-ui.button class="mobile-menu-btn md:hidden text-2xl text-amber-900">
                <i class="fas fa-bars"></i>
            </x-ui.button>
        </nav>
    </header>

    <!-- MOBILE MENU -->
    <div class="mobile-menu fixed inset-0 bg-white z-50 hidden flex-col">

        <!-- CLOSE -->
        <x-ui.button class="close-menu absolute top-4 right-4 text-3xl text-amber-900">
            <i class="fas fa-times"></i>
            </x-ui.button>

            <!-- NAV -->
            <nav class="flex flex-col gap-5 mt-16 px-6 text-lg">

                <x-ui.link href="{{ route('home.view') }}" class="flex items-center gap-3">
                    <i class="fas fa-home text-amber-900"></i> Inicio
                </x-ui.link>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <x-ui.button class="flex items-center gap-3 text-red-600">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </x-ui.button>
                </form>

            </nav>


    </div>

    <!-- CONTENT -->
    <main class="w-full px-2">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white p-6 mt-10 text-center">
        © 2025 Raymi Llaqta de Chachapoyas
    </footer>

</body>

</html>