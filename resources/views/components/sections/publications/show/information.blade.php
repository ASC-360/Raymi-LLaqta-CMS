@props([
    'publication'
])


{{-- Publication information --}}
<div class="space-y-3">


    {{-- User information --}}
    <div class="flex items-center gap-3">


        {{-- Avatar --}}
        <div
            class="w-10 h-10 rounded-full bg-amber-800 text-white flex items-center justify-center font-bold uppercase">


            {{ strtoupper(substr($publication->user->name, 0, 1)) }}


        </div>



        {{-- User name + neighborhood --}}
        <div class="flex flex-col">


            <div class="flex items-center gap-2">


                <span class="font-semibold">

                    {{ $publication->user->name }}

                </span>



                <span class="material-symbols-outlined text-gray-500 text-lg">

                    arrow_forward

                </span>


                <span class="text-gray-600">

                    Está en {{ $publication->neighborhood }}

                </span>


            </div>


        </div>


    </div>




    {{-- Title --}}
    <h1 class="text-2xl md:text-3xl font-bold">


        {{ $publication->title }}


    </h1>



    {{-- Description --}}
    <p class="text-gray-600 mt-2">


        {{ $publication->description }}


    </p>


</div>