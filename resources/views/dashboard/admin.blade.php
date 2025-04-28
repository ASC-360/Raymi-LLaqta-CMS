@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    {{-- Crear usuario administrador --}}
    <a href="{{ route('dashboard-admin.create') }}" class="boton__edit mt-14"><span class="material-symbols-outlined">
            person_add
        </span>Crear un nuevo usuario</a>

    {{-- Tabla --}}
    <div class="overflow-auto mt-10">
        <table border="1" class="w-full text-center">
            <thead class="bg-black text-white ">
                <tr class="whitespace-nowrap">
                    <th>ID</th>
                    <th>Nombre de usuario</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Creacion de registro</th>
                    <th>Ultima actualizacion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="dark:bg-black dark:text-white">
                @forelse ($admins as $admin)
                    <tr class="p-2 text-black hover:bg-black hover:text-white font-medium dark:hover:bg-white dark:text-white dark:hover:text-black">
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->tipo }}</td>
                        <td>{{ $admin->created_at }}</td>
                        <td>{{ $admin->updated_at }}</td>
                        <td>
                            {{-- Boton actualizar --}}
                            <a href="{{ route('dashboard-admin.edit', $admin->id) }}" class="boton__edit">Editar</a>
                        </td>
                        <td>
                            {{-- Boton eliminar --}}
                            <form action="{{ route('dashboard-admin.destroy', $admin->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="boton__delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div>
                        <p>No hay administradores registrados</p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
