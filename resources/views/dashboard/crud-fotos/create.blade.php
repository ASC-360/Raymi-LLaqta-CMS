<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir foto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    {{-- Siderbar --}}
    <x-siderbar id="siderbar" />

        <div class="flex items-center justify-center h-screen mx-4 ">

            <x-card>

                {{-- Formulario --}}
                <form action="{{ route('fotos.store') }}" method="POST" class="flex flex-col gap-2" enctype="multipart/form-data">
                    @csrf
                    
                    {{-- Titulo --}}
                    <h1 class="font-bold text-center">Añadir imagen</h1>

                    {{-- Titulo de la imagen --}}
                    <x-input type='text' placeholder="Titulo de la imagen" name="titulo" value="{{ old('titulo') }}"></x-input>

                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <x-textarea name="descripcion" />

                    @error('descripcion')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    {{-- Subir archivo --}}

                    @error('imagen')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <x-input type='file' placeholder="Subir imagen" name="imagen" value="{{ old('titulo') }}" accept="image/*" required></x-input>

                
                    <x-button type="sybmit">Subir imagen</x-button>
                </form>
            </x-card>
        </div>

</body>
</html>
