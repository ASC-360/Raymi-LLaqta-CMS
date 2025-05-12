@extends('layouts.admin')

@section('title', 'Editar foto | Dashboard')

@section('content')

    <div class="flex items-center justify-center h-screen mx-4">

        <x-card>

            <img src="{{ asset('img/DSC_0510.JPG') }}" class="fixed inset-0 -z-100 h-screen bg-cover bg-center w-full">
            <img src="{{ asset('img/DSC_1763.JPG') }}" class="fixed inset-0 z-1 h-screen bg-cover bg-center w-full lg:hidden">

            {{-- Formulario --}}
            <form action="{{ route('fotos.update', $foto->id) }}" method="POST"
                class="flex flex-col gap-2 bg-white p-4 rounded-[10px] text-black border-2 border-gray-400 dark:bg-gray-700 dark:border-0 dark:text-white z-100"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Titulo --}}
                <h1 class="font-bold text-center text-3xl mb-2">Editar imagen</h1>

                {{-- Titulo de la imagen --}}
                <x-input type='text' placeholder="Titulo de la imagen" name="titulo"
                    value="{{ old('titulo', $foto->titulo) }}"></x-input>

                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <x-textarea name="descripcion" :value="$foto->descripcion ?? 'defecto'" />

                @error('descripcion')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label>Selecciona el barrio:</label>
                <select name="barrio_id"
                    class="bg-white border-2 rounded-2xl p-1.5 font-medium outline-none placeholder-gray-400 transition-all duration-150 hover:bg-white hover:placeholder-gray-400 hover:text-black dark:bg-gray-600"
                    required>
                    <option value="" disabled selected>No seleccionado</option>
                    @foreach ($barrios as $barrio)
                        <option value="{{ $barrio->id }}">{{ $barrio->nombre }}</option>
                    @endforeach
                </select>

                {{-- Subir archivo --}}
                @error('imagen')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <x-input type='file' placeholder="Subir imagen" name="imagen" value="{{ old('titulo') }}"
                    accept="image/*" required></x-input>


                <x-button type="sybmit">Actualizar imagen</x-button>
            </form>
        </x-card>
    </div>

@endsection
