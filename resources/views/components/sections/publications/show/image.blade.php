@props([
    'publication'
])


<img
    src="{{ asset('storage/' . $publication->path) }}"
    alt="{{ $publication->title }}"
    class="
        w-full
        max-h-[85vh]
        object-contain
        rounded-md
    "
>