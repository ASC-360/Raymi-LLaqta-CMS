@props([
    'publication',
    'color'
])

<a href="{{ route('publication.show', $publication->id) }}" class="group">

    <div class="overflow-hidden bg-white border border-gray-200 hover:shadow-xl transition">

        {{-- Image --}}
        <div class="overflow-hidden">

            <img
                src="{{ asset('storage/' . $publication->path) }}"
                alt="{{ $publication->title }}"
                class="w-full h-64 object-cover block group-hover:scale-105 transition duration-300">

        </div>

        {{-- Content --}}
        <div class="p-2">

            <div class="flex justify-between items-start gap-2">

                {{-- Title --}}
                <h2 class="font-bold text-lg text-gray-900 line-clamp-1">
                    {{ $publication->title }}
                </h2>

                {{-- Admin actions --}}
                @auth

                    @if(auth()->user()->role === 'admin')

                        <div class="flex gap-2">

                            {{-- Edit --}}
                            <a
                                href="{{ route('publication.edit', $publication->id) }}"
                                title="Editar publicación"
                                class="text-amber-600 hover:text-amber-800 transition">

                                <span class="material-symbols-outlined text-lg">
                                    edit
                                </span>
                            </a>

                            {{-- Delete --}}
                            <form
                                action="{{ route('publication.destroy', $publication->id) }}"
                                method="POST"
                                onsubmit="return confirm('¿Eliminar publicación?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    title="Eliminar publicación"
                                    class="text-red-600 hover:text-red-800 transition">

                                    <span class="material-symbols-outlined text-lg">
                                        delete
                                    </span>

                                </button>

                            </form>
                        
                        </div>

                    @endif

                @endauth

            </div>

            {{-- Description --}}
            <p class="text-sm text-gray-600 mt-1 line-clamp-2">
                {{ $publication->description }}
            </p>

            {{-- Neighborhood --}}
            <div
                class="mt-2 inline-flex items-center gap-2 {{ $color }} text-white px-3 py-1 rounded-md text-sm">

                <span class="material-symbols-outlined text-base">
                    groups
                </span>

                {{ $publication->neighborhood }}

            </div>

        </div>
        
    </div>

</a>