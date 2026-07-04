@auth

    @if(auth()->user()->role === 'admin')

        <div class="flex justify-end">

            <a href="{{ route('publication.create') }}" class="bg-amber-600 hover:bg-amber-700 text-white 
                w-10 h-10 rounded-full flex items-center justify-center">

                <span class="material-symbols-outlined">
                    add
                </span>
            </a>
        </div>

    @endif

@endauth