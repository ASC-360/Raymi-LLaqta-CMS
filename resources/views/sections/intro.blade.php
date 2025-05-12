@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col">
        <section id="intro-section" class="section flex flex-col flex-grow">
            <div class="intro-image">
                <div class="intro-overlay">
                    <h1 class="text-6xl font-medium text-center bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 text-transparent bg-clip-text" style="-webkit-text-stroke: 0.5px white;">¡Bienvenido {{ Auth::user()->name }}!</h1>
                    <h1 class="intro-title">Descubre Raymillacta</h1>
                    <p class="intro-text">Un viaje al corazón de la cultura Chachapoyas.</p>
                </div>
            </div>
        </section>
    @endsection
