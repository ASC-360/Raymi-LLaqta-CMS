@extends('layouts.admin')

@section('title', 'Actualizar foto')

@section('content')

        <div class="flex items-center justify-center h-screen mx-4 ">

            <x-card>

                {{-- Formulario --}}
                <form action="{{ route('fotos.update', $foto->id) }}" method="POST" class="flex flex-col gap-2" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Titulo --}}
                    <h1 class="font-bold text-center">Editar imagen</h1>

                    {{-- Titulo de la imagen --}}
                    <x-input type='text' placeholder="Titulo de la imagen" name="titulo" value="{{ old('titulo', $foto->titulo) }}"></x-input>

                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <x-textarea name="descripcion" :value="$foto->descripcion ?? 'defecto'" />

                    @error('descripcion')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    {{-- Subir archivo --}}

                    @error('imagen')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <x-input type='file' placeholder="Subir imagen" name="imagen" value="{{ old('titulo') }}" accept="image/*" required></x-input>


                    <x-button type="sybmit">Actualizar imagen</x-button>
                </form>
            </x-card>
        </div>

@endsection
