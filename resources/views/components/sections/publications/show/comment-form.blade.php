@props([
    'publication'
])

<form
    action="{{ route('comments.store', $publication) }}"
    method="POST"
    class="p-4 border-t flex flex-col gap-2"
>

    @csrf

    <x-ui.textarea
        name="content"
        placeholder="Escribe un comentario..."
        class="border rounded-md p-3 resize-none outline-none focus:border-amber-700"
        required
    ></x-ui.textarea>

    <x-ui.button type="submit">
        Comentar
    </x-ui.button>

</form>