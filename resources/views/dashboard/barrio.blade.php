@extends('layouts.admin')

@section('title', 'Barrios | Dashboard')

@section('content')

    {{-- Añadir barrio --}}
    <a href="{{ route('barrios.create') }}" class="boton__edit mt-14"><span class="material-symbols-outlined">
            person_add
        </span>Añadir barrio</a>

    {{-- Tabla de barrios --}}
    <div class="overflow-auto mt-10">
        <table border="1" class="w-full text-center">
            <thead class="bg-black text-white ">
                <tr class="whitespace-nowrap">
                    <th class="pl-4">ID</th>
                    <th class="px-4">Nombre del barrio</th>
                    <th class="px-4">Creacion del registro</th>
                    <th class="pr-4">Ultima actualizacion del registro</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="dark:bg-black dark:text-white">
                @forelse ($barrios as $barrio)
                    <tr
                        class="p-2 text-black hover:bg-black hover:text-white font-medium dark:hover:bg-white dark:text-white dark:hover:text-black">
                        <td class="pl-4">{{ $barrio->id }}</td>
                        <td>{{ $barrio->nombre }}</td>
                        <td>{{ $barrio->created_at }}</td>
                        <td>{{ $barrio->updated_at }}</td>
                        <td>
                            {{-- Boton actualizar --}}
                            <a href="{{ route('barrios.edit', $barrio->id) }}" class="boton__edit"><span
                                    class="material-symbols-outlined">
                                    edit
                                </span>Editar</a>
                        </td>
                        <td class="pl-4 py-2">
                            {{-- Boton eliminar --}}
                            <form action="{{ route('barrios.destroy', $barrio->id) }}" method="POST">
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
                    <p class="font-medium text-gray-500">Cuanda añadas un barrio puedes verlo aqui</p>
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
