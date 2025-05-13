@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col">
        <section id="gallery-section" class="section flex-grow">

            <div
                class="flex flex-col items-center font-medium text-3xl sm:text-3xl md:text-4xl justify-center text-center mb-4">
                <h1>
                    <span
                        class="bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent">{{ Auth::user()->name }}</span>,
                    observa nuestra galería de imágenes!
                </h1>
            </div>

            <p>Explora la belleza y el misterio del Raymillacta a través de nuestra colección de imágenes que capturan
                la esencia de este extraordinario sitio arqueológico.</p>

            <form action="{{ route('gallery.view') }}" method="GET" class="mb-4">
                <div class="flex flex-col gap-2">
                    <label for="barrio_id">Selecciona el barrio:</label>
                    <select name="barrio_id" id="barrio_id" onchange="this.form.submit()"
                        class="bg-white border-2 rounded-2xl p-1.5 font-medium outline-none placeholder-gray-400 transition-all duration-150 hover:bg-black hover:text-white hover:placeholder-gray-400 dark:bg-gray-600"
                        required>
                        <option value="" disabled selected>No seleccionado</option>
                        <option value="" {{ request('barrio_id') == null ? 'selected' : '' }}>Mostrar todas</option>
                        @foreach ($barrios as $barrio)
                            <option value="{{ $barrio->id }}" {{ request('barrio_id') == $barrio->id ? 'selected' : '' }}>
                                {{ $barrio->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>


            {{-- Mostrar las fotos almacenadas en la DB --}}
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 w-full">
                @forelse ($fotos as $foto)
                    <a href="{{ route('fotos.show', $foto->id) }}"
                        class="bg-white shadow-2xl p-2 rounded-[10px] h-auto transition-all border-1 border-gray-400 duration-300 cursor-pointer !text-black transform-duration hover:scale-102 hover:bg-gray-100">
                        <img src="{{ asset('storage/' . $foto->ruta) }}" alt="img" class="rounded-[10px] h-40 w-full">
                        <h1 class="font-medium">{{ $foto->titulo }}</h1>
                        <p class="break-words text-gray-500">{{ $foto->barrio->nombre }}</p>
                    </a>
                @empty
                    <p class="text-center font-medium">No hay nada aquí</p>
                @endforelse
            </div>
        </section>
    </div>
@endsection
