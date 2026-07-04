@extends('layouts.app')

@section('content')

    <div class="bg-white rounded-md p-4 space-y-4">

        <x-sections.publications.header />

        <x-sections.publications.create-button />

        <x-sections.publications.filters :neighborhoods="$neighborhoods" />

        @if($publications->isEmpty())
            <x-sections.publications.empty-results />
        @endif

        <x-sections.publications.gallery :publications="$publications" />

    </div>

@endsection