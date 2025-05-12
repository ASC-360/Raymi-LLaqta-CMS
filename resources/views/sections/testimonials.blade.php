@extends('layouts.app')

@section('content')
    <section id="testimonials-section" class="section">
        <h3 class="text-4xl font-medium text-center mb-2">Lo que dicen nuestros visitantes</h3>
        <p>Experiencias auténticas compartidas por viajeros que han explorado el fascinante mundo de los Chachapoyas
            en Raymillacta.</p>

        <div class="testimonials-container">
            <div class="testimonial-card">
                <i class="fas fa-quote-right testimonial-quote"></i>
                <p class="testimonial-text">"Una de las experiencias más impresionantes de mi visita a Perú. El
                    sitio está extraordinariamente conservado y las vistas desde la cima son absolutamente
                    espectaculares. Nuestro guía local compartió fascinantes historias sobre los Chachapoyas."</p>
                <p class="testimonial-author">- Laura Martínez</p>
            </div>

            <div class="testimonial-card">
                <i class="fas fa-quote-right testimonial-quote"></i>
                <p class="testimonial-text">"Nunca imaginé que encontraría un lugar tan misterioso y lleno de historia.
                    Raymillacta es un lugar único, tanto por su arquitectura como por su contexto histórico."</p>
                <p class="testimonial-author">- David Ramos</p>
            </div>

            <div class="testimonial-card">
                <i class="fas fa-quote-right testimonial-quote"></i>
                <p class="testimonial-text">"Si te encanta la historia y la arqueología, no puedes perderte este lugar.
                    Es un testimonio impresionante de las culturas que existieron antes de los Incas."</p>
                <p class="testimonial-author">- José González</p>
            </div>
        </div>
    </section>
@endsection
