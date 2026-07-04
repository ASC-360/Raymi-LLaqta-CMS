@extends('layouts.app')

@section('title', 'Añadir publicación | Dashboard')

@section('content')

<div class="flex items-center justify-center h-screen mx-4">

    <x-card>

        <form action="{{ route('publication.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="flex flex-col gap-3 bg-white p-4 rounded-[10px] text-black">

            @csrf


            <h1 class="font-bold text-center text-3xl">
                Añadir publicación
            </h1>


            {{-- TITLE --}}
            <label>
                Título:
            </label>

            <x-input
                type="text"
                name="title"
                placeholder="Título de la publicación"
                value="{{ old('title') }}"
            />


            @error('title')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror



            {{-- DESCRIPTION --}}
            <label>
                Descripción:
            </label>


            <x-textarea
                name="description"
                :value="old('description')"
            />


            @error('description')
                <p class="text-red-500">
                    {{ $message }}
                </p>
            @enderror




            {{-- NEIGHBORHOOD --}}
            <label>
                Barrio:
            </label>


            <select 
                name="neighborhood"
                class="bg-gray-100 rounded-md p-2 border-2 border-gray-200 focus:border-amber-900 outline-none"
                required>


                <option value="">
                    Seleccionar barrio
                </option>


                @foreach([
                    'La Laguna',
                    'Yance',
                    'Santo Domingo',
                    'Luya Urco',
                    'Higos Urcio',
                    'Señor de los Milagros',
                    '16 de Octubre'
                ] as $neighborhood)


                    <option 
                        value="{{ $neighborhood }}"
                        {{ old('neighborhood') == $neighborhood ? 'selected' : '' }}>

                        {{ $neighborhood }}

                    </option>


                @endforeach


            </select>


            @error('neighborhood')

                <p class="text-red-500">
                    {{ $message }}
                </p>

            @enderror




            {{-- IMAGE --}}
            <label>
                Imagen:
            </label>


            <x-input
                type="file"
                name="image"
                accept="image/*"
            />


            @error('image')

                <p class="text-red-500">
                    {{ $message }}
                </p>

            @enderror



            <x-ui.button type="submit">

                Subir publicación

            </x-ui.button>



        </form>


    </x-card>


</div>


@endsection