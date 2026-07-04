@extends('layouts.app')

@section('content')

    <div class="relative p-2 w-full h-screen flex gap-2 overflow-hidden">

        {{-- Background decoration --}}
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-amber-500 rounded-full blur-3xl opacity-40">
        </div>

        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-900 rounded-full blur-3xl opacity-40">
        </div>

        {{-- Main content --}}
        <div class="relative z-10 flex w-full gap-2">

            <x-siderbar />

            <main class="transition-all duration-300 rounded-md w-full">
                @yield('content')
            </main>

        </div>

    </div>
    
@endsection

