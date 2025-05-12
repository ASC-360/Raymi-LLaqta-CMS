<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raymi Llacta de Chachapoyas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    @vite(['resources/css/styles.css', 'resources/js/script.js', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark:bg-gray-800">
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header>
        <nav class="dark:bg-gray-700">
            <div class="logo">Raymi Llacta</div>
            <ul>
                <li class="active"><a href="{{ route('intro.view') }}">Inicio</a></li>
                <li><a href="{{ route('history.view') }}">Historia</a></li>
                <li><a href="{{ route('gallery.view') }}">Galería</a></li>
                <li><a href="{{ route('location.view') }}">Ubicación</a></li>
                <li><a href="{{ route('testimonials.view') }}">Testimonios</a></li>
                @if (Auth::user()->tipo === 'admin')
                    <a href="{{ route('dashboard-admin.index') }}" class="ml-2 ">Dashboard</a>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="ml-4 bg-transparent rounded-2xl text-blue-600 py-1 px-2 border-blue-600 border-2 hover:bg-blue-600 hover:text-white items-center">Cerrar
                        sesión</button>
                </form>
            </ul>

            {{-- Boton Nav Movil --}}
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    <!-- Mobile Navigation -->
    <div class="mobile-menu">
        <button class="close-menu"><i class="fas fa-times"></i></button>
        <ul>
            <li class="active"><a href="{{ route('intro.view') }}">Inicio</a></li>
            <li><a href="{{ route('history.view') }}">Historia</a></li>
            <li><a href="{{ route('gallery.view') }}">Galería</a></li>
            <li><a href="{{ route('location.view') }}">Ubicación</a></li>
            <li><a href="{{ route('testimonials.view') }}">Testimonios</a></li>
            @if (Auth::user()->tipo === 'admin')
                <a href="{{ route('dashboard-admin.index') }}">Dashboard</a>
            @endif
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit"
                    class="bg-transparent w-full rounded-2xl text-blue-600 py-1 px-2 border-blue-600 border-2 hover:bg-blue-600 hover:text-white items-center mt-4">Cerrar
                    sesión</button>
            </form>
        </ul>
    </div>

    <!-- Main Content -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-6 mt-auto">
        <div class="footer-content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="footer-column">
                <h4>Raymillacta</h4>
                <p>Descubre la magia de uno de los sitios arqueológicos más importantes de la cultura Chachapoyas.</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/people/Raymi-Llaqta/61555832160237/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/p/DJadQ7Uua5O/?igsh=cHJqbjlqb2E4aTR4" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@raymillaqta2025" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/channel/UCNWhuZ2710hdQF6XqB8grDw" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Enlaces Rápidos</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('intro.view') }}"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                    <li><a href="{{ route('history.view') }}"><i class="fas fa-chevron-right"></i> Historia</a></li>
                    <li><a href="{{ route('gallery.view') }}"><i class="fas fa-chevron-right"></i> Galería</a></li>
                    <li><a href="{{ route('location.view') }}"><i class="fas fa-chevron-right"></i> Ubicación</a></li>
                    <li><a href="{{ route('testimonials.view') }}"><i class="fas fa-chevron-right"></i> Testimonios</a></li>
                </ul>
            </div>

            <div class="footer-column footer-contact">
                <h4>Contacto</h4>
                <p><i class="fas fa-map-marker-alt"></i> Centro de Visitantes, Chachapoyas, Amazonas, Perú</p>
                <p><i class="fas fa-phone"></i> +51 945 678 123</p>
                <p><i class="fas fa-envelope"></i> info@raymillacta.pe</p>
                <p><i class="fas fa-clock"></i> Lunes - Domingo: 8:00 AM - 5:00 PM</p>
            </div>
        </div>

        <div class="copyright text-center mt-6">
            <p>© 2025 Raymillacta de los Chachapoyas. Todos los derechos reservados.</p>
        </div>
        <div class="flex gap-2 justify-center flex-col">
            <p class="text-center text-gray-400">Realizado por estudiantes de SENATI - Chachapoyas</p>
            <div class="flex justify-center gap-2">
                <p class="text-orange-200">Anthony Sucso (ASC)</p>
                <p> | </p>
                <p> Harold A.A.A </p>
            </div>
        </div>
    </footer>

    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>
</body>

</html>
