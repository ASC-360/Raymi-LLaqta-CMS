@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col">
        <section id="gallery-section" class="section flex-grow">
            <h3 class="mt-0">Galería de Imágenes</h3>
            <p>Explora la belleza y el misterio del Raymillacta a través de nuestra colección de imágenes que capturan
                la esencia de este extraordinario sitio arqueológico.</p>

            {{-- Mostrar las fotos almacenadas en la DB --}}
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 w-full">
                @forelse ($fotos as $foto)
                    <a href="{{ route('fotos.show', $foto->id) }}"
                        class="bg-white shadow p-2 rounded-[10px] h-auto transition-all duration-300 cursor-pointer !text-black transform-duration hover:scale-105">
                        <img src="{{ asset('storage/' . $foto->ruta) }}" alt="img" class="rounded-[10px] h-40 w-full">
                        <h1 class="font-medium">{{ $foto->titulo }}</h1>
                        <p class="break-words">{{ $foto->descripcion }}</p>
                    </a>
                @empty
                    <p class="text-center font-medium">No hay nada aquí</p>
                @endforelse
            </div>
        </section>
    </div>
@endsection
