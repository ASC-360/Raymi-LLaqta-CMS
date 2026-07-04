<a href="{{ $href }}" {{ $attributes->merge([
    'class' => 'w-full transition-all duration-150 hover:text-amber-900 rounded p-2 text-amber-800 flex justify-center gap-4'
]) }}>
    {{ $slot }}
</a>