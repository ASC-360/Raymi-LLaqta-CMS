

<button id="button_siderbar" class="font-bold p-2 transition-all duration-150 cursor-pointer fixed top-0 left-0 hover:bg-gray-300">X</button>
<aside id="siderbar"
    class="bg-blue-500 fixed left-0 h-screen transition-all duration-300 w-0 overflow-hidden top-0 text-white">
    <h1 class="font-bold text-center mt-4">Raymi Dashboard</h1>
    <div class="flex flex-col p-4">
        <button id="cerrar_siderbar" class=" flex justify-end">X</button>
        <ul class="font-medium flex flex-col gap-2">
            <x-link >Administradores</x-link>
            <x-link href="{{ route('dashboard.galeria') }}">Fotos</x-link>
            <x-link href="{{ route('fotos.index') }}">Ir a la web</x-link>
        </ul>
    </div>
</aside>
