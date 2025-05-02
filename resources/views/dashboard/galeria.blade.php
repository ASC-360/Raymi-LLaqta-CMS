@extends('layouts.admin')

@section('title', 'Dashboard | Imagenes')

@section('content')

    {{-- Agregar imagen  --}}
    <a href="{{ route('fotos.create') }}" class="boton__edit mt-14"><span class="material-symbols-outlined">
            add_photo_alternate
        </span>Agregar imagen</a>

    {{-- Tabla --}}
    <div class="overflow-auto mt-10">
        <table border="1" class="w-full text-center">
            <thead class="bg-black text-white">
                <tr class="whitespace-nowrap">
                    <th class="px-4">ID</th>
                    <th class="px-8">Titulo</th>
                    <th class="px-8">Descripcion</th>
                    <th class="px-4">Barrio</th>
                    <th class="px-10 text-center">Imagen</th>
                    <th class="px-8">Creacion de registro</th>
                    <th class="px-8">Ultima actualizacion</th>
                    <th ></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="dark:bg-black dark:text-white">
                @forelse ($fotos as $foto)
                    <tr
                        class="p-2 text-black hover:bg-black hover:text-white font-medium dark:hover:bg-white dark:text-white dark:hover:text-black">
                        <td>{{ $foto->id }}</td>
                        <td>{{ $foto->titulo }}</td>
                        <td class="break-words max-w-[250px] px-4">
                            {{ $foto->descripcion }}
                        </td>
                        <td>
                            {{ $foto->barrio->nombre ?? 'Sin barrio' }}
                        </td>
                        <td>
                            <a href="{{ route('fotos.show', $foto->id) }}">
                                <img src="{{ asset('storage/' . $foto->ruta) }}" alt="{{ $foto->titulo }}"
                                    class="h-25 m-1 rounded-[10px] w-40 flex justify-center">
                            </a>
                        </td>
                        </td>
                        <td>{{ $foto->created_at }}</td>
                        <td>{{ $foto->updated_at }}</td>
                        <td>
                            {{-- Boton actualizar --}}
                            <a href="{{ route('fotos.edit', $foto->id) }}" class="boton__edit"><span
                                    class="material-symbols-outlined">
                                    edit
                                </span>Editar</a>
                        </td>
                        <td class="px-4">
                            {{-- Boton eliminar --}}
                            <form action="{{ route('fotos.destroy', $foto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="boton__delete"><span class="material-symbols-outlined">
                                        delete
                                    </span>Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="bg-gray-200 rounded-[10px] mb-2 text-center p-2 dark:bg-gray-700">
                        <p class="font-medium text-gray-500">Cuando publiques fotos se mostraran aqui y en la web </p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
