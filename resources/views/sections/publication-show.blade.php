@extends('layouts.app')

@section('content')

    <div class="min-h-screen p-2">

        {{-- Publication --}}
        <div class="flex flex-col gap-2">
            
            <div class="flex flex-col">

                <x-sections.publications.show.information :publication="$publication" />

                <x-sections.publications.show.image :publication="$publication" />

            </div>

            {{-- Comments --}}
            <div>
                <x-sections.publications.show.comments :publication="$publication" />
            </div>
        </div>



    </div>

@endsection