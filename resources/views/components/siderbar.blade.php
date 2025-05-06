{{-- Boton para abrir el Siderbar --}}
<button id="button_siderbar"
    class="font-bold p-2 transition-all duration-150 cursor-pointer absolute top-0 left-0 hover:bg-gray-300 dark:text-white dark:hover:bg-gray-900"><span
        class="material-symbols-outlined">
        dehaze
    </span></button>

{{-- Siderbar --}}
<aside id="siderbar"
    class="bg-blue-500 fixed left-0 h-screen transition-all duration-300 w-0 overflow-hidden top-0 text-white flex flex-col z-100">

    {{-- Contenido del Siderbar --}}
    <div class="p-4">

        <div class="flex gap-2 justify-center items-center">
            {{-- Titulo del Siderbar --}}
            <h1 class="font-bold text-center text-[20px]">Raymi Dashboard</h1>

            {{-- Boton para cerrar el Siderbar --}}
            <button id="cerrar_siderbar"
                class="absolute top-0 right-0 font-medium px-1.5 py-1 rounded-[10px] hover:bg-blue-600 transition-all duration-150 m-2 flex items-center"><span
                    class="material-symbols-outlined">
                    dehaze
                </span></button>
        </div>

        {{-- Links del Siderbar --}}
        <ul class="font-medium gap-2 flex flex-col justify-center text-left space-x-2">

            <x-link href="{{ route('dashboard-admin.index') }}"><span class="material-symbols-outlined">
                    groups
                </span>Administradores</x-link>

            <x-link href="{{ route('dashboard.galeria') }}">
                <span class="material-symbols-outlined">
                    image
                </span>Fotos</x-link>

            <x-link href="{{ route('barrios.index') }}" >Barrios</x-link>

            <x-link href="{{ route('intro.view') }}"><span class="material-symbols-outlined">
                    home
                </span>Ir a la web</x-link>



            <form action="{{ route('logout') }}" method="post" class="flex items-center justify-center">
                @csrf
                <button type="submit"
                    class="bg-blue-700 flex items-center gap-2 w-full p-2 text-center rounded-[10px] transition-all duration-150 justify-center hover:bg-blue-800">
                    <span class="material-symbols-outlined">
                        logout
                    </span>Cerrar sesion
                </button>
            </form>
        </ul>

        {{-- Descripcion del usuario autenticado --}}
        <div class="flex bg-blue-600 w-full rounded-[10px] p-2 gap-4 cursor-pointer mt-2">

            {{-- Avatar --}}
            <div class="rounded-[50%] w-10 h-10 bg-amber-500 text-white text-center text-2xl">
                {{ Str::ucfirst(Auth::user()->name[0]) }}</div>

            {{-- Nombre y correo del usuario autenticado --}}
            <div class="flex flex-col">
                <h1 class="font-medium">{{ Auth::user()->name }}</h1>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
</aside>
