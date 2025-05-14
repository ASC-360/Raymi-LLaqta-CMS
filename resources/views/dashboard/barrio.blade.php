@extends('layouts.admin')

@section('title', 'Barrios | Dashboard')

@section('content')

    <div class="mt-14 text-center dark:text-white">
        <h1 class="text-4xl font-bold lg:text-5xl bg-gradient-to-r from-sky-500 to-purple-500 text-transparent bg-clip-text">
            Tabla de barrios</h1>
        <p class="mt-4">Estos son los barrios registrados. Puedes asignar uno a tu imagen subida. Si no encuentras tu
            barrio en la lista, ¡créalo y agrégalo!</p>
    </div>

    {{-- Añadir barrio --}}
    <a href="{{ route('barrios.create') }}" class="boton__edit my-8"><span class="material-symbols-outlined">
            home
        </span>Añadir barrio</a>

    @if ($barrios->isEmpty())
        <div class="bg-gray-200 rounded-[10px] mb-2 text-center p-2 dark:bg-gray-700 w-full">
            <p class="font-medium text-gray-500">Cuanda añadas un barrio puedes verlo aqui</p>
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-200 border-2 border-green-500 px-2 py-1 rounded-[10px] mb-4 transition-all duration-200 flex items-center justify-center gap-2 text-green-500"
            id="success">
            <span class="material-symbols-outlined">
                check_circle
            </span>
            <p>{{ session('success') }}</p>
        </div>
    @endif


    {{-- Tabla de barrios --}}
    <div class="overflow-auto">
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
                @foreach ($barrios as $barrio)
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
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
