@extends('layouts.admin')

@section('title', 'Añadir imagen | Dashboard')

@section('content')

    <div class="flex items-center justify-center h-screen mx-4 ">

        <x-card>

            {{-- Formulario --}}
            <form action="{{ route('fotos.store') }}" method="POST" class="flex flex-col gap-2" enctype="multipart/form-data">
                @csrf

                {{-- Titulo --}}
                <h1 class="font-bold text-center">Añadir imagen</h1>

                {{-- Titulo de la imagen --}}
                <label for="titulo">Añade un titulo</label>
                <x-input type='text' placeholder="Titulo de la imagen" name="titulo" value="{{ old('titulo') }}"></x-input>

                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label for="descripcion">Añade una descripcion:</label>
                <x-textarea name="descripcion" />

                @error('descripcion')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                {{-- Subir archivo --}}

                @error('imagen')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label for="imagen">Añadir imagen (JPG, JPGE, PNG):</label>
                <x-input type='file' placeholder="Subir imagen" name="imagen" value="{{ old('titulo') }}"
                    accept="image/*" required></x-input>


                <x-button type="sybmit">Subir imagen</x-button>
            </form>
        </x-card>
    </div>
@endsection
