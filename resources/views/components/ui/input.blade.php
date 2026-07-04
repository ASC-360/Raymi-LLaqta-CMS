<input
    type="{{ $type }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ old($name, $value) }}"
    {{ $attributes->merge([
        'class' => 'bg-gray-100 rounded-md placeholder:text-gray-500 p-2! outline-none border-2 border-gray-100 focus:border-amber-900 hover:border-amber-950 transition duration-400'
    ]) }}
>