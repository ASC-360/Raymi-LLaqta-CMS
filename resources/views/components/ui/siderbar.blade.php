<aside class="w-10 h-full bg-white p-2 rounded-md flex flex-col items-center gap-3">

    {{-- DASHBOARD --}}
    <a href="{{ route('dashboard.admin.view') }}"
        class="w-8 h-8 flex items-center justify-center rounded-md bg-amber-800 text-white hover:bg-amber-900 transition"
        title="Dashboard">

        <span class="material-symbols-outlined text-[18px]">
            dashboard
        </span>
    </a>

    {{-- GALERIA --}}
    <a href="{{ route('publications.admin.view') }}"
        class="w-8 h-8 flex items-center justify-center rounded-md bg-amber-800 text-white hover:bg-amber-900 transition"
        title="Galeria">

        <span class="material-symbols-outlined text-[18px]">
            image
        </span>
    </a>

    {{-- IR A LA WEB --}}
    <a href="{{ route('home.view') }}"
        class="w-8 h-8 flex items-center justify-center rounded-md bg-amber-800 text-white hover:bg-amber-900 transition"
        title="Ir a la web">

        <span class="material-symbols-outlined text-[18px]">
            public
        </span>
    </a>

    {{-- LOGOUT --}}
    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit"
            class="w-8 h-8 flex items-center justify-center rounded-md bg-amber-800 text-white hover:bg-amber-900 transition"
            title="Cerrar sesión">

            <span class="material-symbols-outlined text-[18px]">
                logout
            </span>
        </button>

    </form>

</aside>