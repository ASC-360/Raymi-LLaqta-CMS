@props([
    'publications'
])

<div class="grid grid-cols-2 md:grid-cols-4 gap-2">

    @foreach($publications as $publication)

           @php

            $colors = [

                'La Laguna' => 'bg-blue-800',
                'Yance' => 'bg-green-800',
                'Santo Domingo' => 'bg-purple-800',
                'Luya Urco' => 'bg-amber-500',
                'Higos Urcio' => 'bg-amber-900',
                'Señor de los Milagros' => 'bg-red-800',
                '16 de Octubre' => 'bg-cyan-800',

            ];

            $color =
                $colors[$publication->neighborhood]
                ?? 'bg-gray-600';

        @endphp

                <x-sections.publications.card-gallery :publication="$publication" :color="$color" />

    @endforeach
    
</div>