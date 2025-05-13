@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col">
        <section id="intro-section" class="section flex flex-col flex-grow">
            <div class="intro-image">
                <div class="intro-overlay">
                    <h1 class="text-5xl font-medium text-center bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 text-transparent bg-clip-text lg:text-6xl"
                        style="-webkit-text-stroke: 0.5px white;">¡Bienvenido {{ Auth::user()->name }}!</h1>
                    <div class="flex flex-col gap-2 mt-4 text-center">
                        <h1 class="text-4xl">Descubre Raymillacta</h1>
                        <p class="intro-text">Un viaje al corazón de la cultura Chachapoyas.</p>
                    </div>
                </div>
            </div>
        </section>
    @endsection
