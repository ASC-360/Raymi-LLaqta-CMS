@props([
    'publication'
])


<div class="bg-white text-black rounded-xl h-full flex flex-col overflow-hidden w-1/2">

    {{-- Comments header --}}
    <div class="p-4 border-b">

        <h2 class="text-xl font-bold">
            Comentarios ({{ $publication->comments->count() }})
        </h2>

    </div>



    {{-- Comments list --}}
    <div class="flex-1 overflow-y-auto p-4 space-y-4">


        @if($publication->comments->isEmpty())


            <div class="h-full flex items-center justify-center text-gray-500 text-center">

                Todavía no hay comentarios.

            </div>


        @else


            @foreach($publication->comments as $comment)


                <x-sections.publications.show.comment-item
                    :comment="$comment"
                />


            @endforeach


        @endif


    </div>



    {{-- Create comment --}}
    @auth

        <x-sections.publications.show.comment-form
            :publication="$publication"
        />

    @endauth


</div>