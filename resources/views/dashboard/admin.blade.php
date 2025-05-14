@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="mt-14 text-center dark:text-white">
        <h1 class="text-4xl font-bold lg:text-5xl bg-gradient-to-r from-sky-500 to-purple-500 text-transparent bg-clip-text">
            Tabla de administradores</h1>
        <p class="mt-4">Aqui se muestran las administradores regitrados. Los administradores pueden gestionar las imagenes,
            barrios y agregar mas administradores.</p>
    </div>

    {{-- Crear usuario administrador --}}
    <a href="{{ route('dashboard-admin.create') }}" class="boton__edit my-6"><span class="material-symbols-outlined">
            person_add
        </span>Crear un nuevo usuario</a>

    @if (session('success'))
        <div class="bg-green-200 border-2 border-green-500 px-2 py-1 rounded-[10px] mb-4 transition-all duration-200 flex items-center justify-center gap-2 text-green-500"
            id="success">
            <span class="material-symbols-outlined">
                check_circle
            </span>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    {{-- Tabla --}}
    <div class="overflow-auto">
        <table border="1" class="w-full text-center">
            <thead class="bg-black text-white ">
                <tr class="whitespace-nowrap">
                    <th>ID</th>
                    <th>Nombre de usuario</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Creacion de registro</th>
                    <th class="px-4">Ultima actualizacion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="dark:bg-black dark:text-white">
                @forelse ($admins as $admin)
                    <tr
                        class="p-2 text-black hover:bg-black hover:text-white font-medium dark:hover:bg-white dark:text-white dark:hover:text-black">
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td class="px-7">{{ $admin->tipo }}</td>
                        <td>{{ $admin->created_at }}</td>
                        <td>{{ $admin->updated_at }}</td>
                        <td>
                            {{-- Boton actualizar --}}
                            <a href="{{ route('dashboard-admin.edit', $admin->id) }}" class="boton__edit"><span
                                    class="material-symbols-outlined">
                                    edit
                                </span>Editar</a>
                        </td>
                        <td class="pl-4 py-2">
                            {{-- Boton eliminar --}}
                            <form action="{{ route('dashboard-admin.destroy', $admin->id) }}" method="POST">
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
                        <p class="font-medium text-gray-500">Cuanda añadas administradores puedes verlos aqui</p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
