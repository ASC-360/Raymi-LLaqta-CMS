<div class="bg-gray-100 rounded-md p-6 text-center">


    <span class="material-symbols-outlined text-gray-500 text-4xl">

        search_off

    </span>


    <p class="mt-2 text-gray-600 font-medium">

        No encontramos publicaciones.

    </p>



    @if(request('search'))


        <p class="text-sm text-gray-500">

            No existen resultados para:

            <b>
                {{ request('search') }}
            </b>

        </p>


    @elseif(request('neighborhood'))


        <p class="text-sm text-gray-500">

            No hay publicaciones en el barrio:

            <b>
                {{ request('neighborhood') }}
            </b>

        </p>


    @endif


</div>