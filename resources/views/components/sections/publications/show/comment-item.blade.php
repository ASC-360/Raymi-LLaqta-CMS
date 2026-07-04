@props([
    'comment'
])

<div class="flex gap-3">

    {{-- Avatar --}}
    <div
        class="w-10 h-10 shrink-0 rounded-full bg-amber-800 text-white flex items-center justify-center font-bold uppercase"
    >
        {{ strtoupper(substr($comment->user->name, 0, 1)) }}
    </div>

    {{-- Content --}}
    <div class="flex-1">

        <div class="flex justify-between gap-3">

            <div>

                <p class="font-semibold">
                    {{ $comment->user->name }}
                </p>

                <p class="text-gray-700 text-sm mt-1">
                    {{ $comment->content }}
                </p>

                <span class="text-xs text-gray-400">
                    {{ $comment->created_at->format('d/m/Y H:i') }}
                </span>

            </div>

            {{-- Actions --}}
            @auth

                @if(auth()->id() === $comment->user_id || auth()->user()->role === 'admin')

                    <div class="flex gap-2">

                        {{-- Edit --}}
                        <form
                            action="{{ route('comments.edit', $comment) }}"
                            method="GET"
                        >

                            <button
                                type="submit"
                                class="text-amber-700 hover:text-amber-900"
                                title="Editar"
                            >

                                <span class="material-symbols-outlined">
                                    edit
                                </span>

                            </button>

                        </form>

                        {{-- Delete --}}
                        <form
                            action="{{ route('comments.destroy', $comment) }}"
                            method="POST"
                            onsubmit="return confirm('¿Eliminar comentario?')"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="text-red-600 hover:text-red-800"
                                title="Eliminar"
                            >
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>

                        </form>

                    </div>

                @endif

            @endauth

        </div>

    </div>

</div>