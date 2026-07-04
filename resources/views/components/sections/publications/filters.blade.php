@props([
    'neighborhoods'
])

<form method="GET" class="flex flex-col md:flex-row gap-3">


    <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar publicación..."
        class="border rounded-md p-2 w-full outline-none focus:border-amber-600">



    <select name="neighborhood" class="border rounded-md p-2">


        <option value="">
            Todos los barrios
        </option>



        @foreach($neighborhoods as $barrio)


            <option value="{{ $barrio }}" {{ request('neighborhood') == $barrio ? 'selected' : '' }}>

                {{ $barrio }}

            </option>


        @endforeach


    </select>



    <button class="bg-amber-900 text-white px-5 py-2 rounded-md">


        Buscar


    </button>


</form>