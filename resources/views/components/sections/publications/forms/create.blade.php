@extends('layouts.admin')

@section('title', 'Añadir publicación | Dashboard')

@section('content')


<div class="flex items-center justify-center min-h-screen mx-4">


    <x-card class="w-full max-w-5xl">


        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


            {{-- FORM --}}
            <form
                action="{{ route('publication.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="flex flex-col gap-3 bg-white p-4 rounded-[10px] text-black">


                @csrf



                <h1 class="font-bold text-3xl text-center">

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

                <input
                    id="imageInput"
                    type="file"
                    name="image"
                    accept="image/*"
                    class="bg-gray-100 rounded-md p-2 border-2 border-gray-200">

                @error('image')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                @enderror

                <x-ui.button type="submit">
                    Subir publicación
                </x-ui.button>
            </form>

            {{-- IMAGE PREVIEW --}}
            <div class="flex items-center justify-center">

                <div class="w-full h-full min-h-80 bg-gray-100 rounded-md flex items-center justify-center overflow-hidden">

                    <img
                        id="imagePreview"
                        src=""
                        alt="Vista previa"
                        class="hidden w-full h-full object-cover">

                    <p
                        id="previewText"
                        class="text-gray-500 text-center">
                        Selecciona una imagen para ver la vista previa.
                    </p>
                </div>


            </div>



        </div>


    </x-card>


</div>




<script>

    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');
    const previewText = document.getElementById('previewText');

    imageInput.addEventListener('change', function(event){

        const file = event.target.files[0];

        if(file){

            const reader = new FileReader();

            reader.onload = function(e){
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                previewText.classList.add('hidden');
            }

            reader.readAsDataURL(file);

        }
    });


</script>


@endsection