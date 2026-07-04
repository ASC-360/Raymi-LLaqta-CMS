<button type="{{ $type ?? 'button' }}" {{ $attributes->merge([
    'class' => 'bg-amber-900 text-white font-medium p-2 rounded-md cursor-pointer flex gap-2 items-center justify-center hover:bg-amber-950 transition duration-400'
]) }}>

    {{ $slot }}

</button>