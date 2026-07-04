@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <main class="space-y-4!">

        {{-- HEADER --}}
        <x-card>

            <div>

                <h1 class="text-3xl font-bold text-gray-800">
                    Dashboard de Usuarios
                </h1>

                <p class="text-gray-600 mt-1 italic">
                    Gestión de usuarios del sistema (admins y usuarios registrados)
                </p>

            </div>


            {{-- STATS CARDS --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">

                <div class="bg-amber-800 text-white p-4 rounded-lg shadow">

                    <h2 class="text-lg font-semibold">
                        Total Usuarios
                    </h2>

                    <p class="text-3xl font-bold">
                        {{ $users->count() }}
                    </p>

                </div>


                <div class="bg-amber-600 text-white p-4 rounded-lg shadow">

                    <h2 class="text-lg font-semibold">
                        Administradores
                    </h2>

                    <p class="text-3xl font-bold">
                        {{ $users->where('role', 'admin')->count() }}
                    </p>

                </div>

            </div>

        </x-card>



        {{-- TABLE --}}
        <x-card>


            {{-- FILTROS --}}
            <form method="GET" class="p-4 flex flex-col md:flex-row gap-3 border-b">


                {{-- BUSCAR --}}
                <x-input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar usuario..."
                    class="border rounded-lg p-2 w-full outline-none focus:ring-2 focus:ring-amber-500" />



                {{-- SELECT ROL --}}
                <select name="role" class="border rounded-lg p-2 outline-none focus:ring-2 focus:ring-amber-500">

                    <option value="">
                        Todos los usuarios
                    </option>

                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>
                        Administradores
                    </option>


                    <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>
                        Usuarios
                    </option>


                </select>


                <button class="bg-amber-800 text-white px-4 rounded-lg hover:bg-amber-900">

                    Buscar

                </button>


            </form>




            <div class="bg-white rounded-lg shadow overflow-hidden">


                <div class="p-4 border-b">

                    <h2 class="font-semibold text-gray-700">
                        Lista de Usuarios
                    </h2>

                </div>



                <table class="w-full text-left">


                    <thead class="bg-gray-100 text-gray-700">

                        <tr>

                            <th class="p-3">
                                ID
                            </th>

                            <th class="p-3">
                                Nombre
                            </th>

                            <th class="p-3">
                                Email
                            </th>

                            <th class="p-3">
                                Rol
                            </th>

                            <th class="p-3">
                                Fecha
                            </th>

                        </tr>

                    </thead>



                    <tbody>


                        @foreach($users as $user)

                            <tr class="border-b hover:bg-gray-50">


                                <td class="p-3">
                                    {{ $user->id }}
                                </td>


                                <td class="p-3 font-medium">
                                    {{ $user->name }}
                                </td>


                                <td class="p-3 text-gray-600">
                                    {{ $user->email }}
                                </td>


                                <td class="p-3">

                                    @if($user->role === 'admin')

                                        <span class="px-2 py-1 text-xs rounded bg-amber-600 text-white">
                                            Admin
                                        </span>

                                    @else

                                        <span class="px-2 py-1 text-xs rounded bg-amber-800 text-white">
                                            User
                                        </span>

                                    @endif

                                </td>


                                <td class="p-3 text-gray-500 text-sm">

                                    {{ $user->created_at->format('d/m/Y') }}

                                </td>


                            </tr>


                        @endforeach


                    </tbody>


                </table>


            </div>


        </x-card>


    </main>

@endsection