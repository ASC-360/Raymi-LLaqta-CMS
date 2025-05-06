@extends('layouts.app')

@section('content')
    <section id="location-section" class="section">
        <h3>Ubicación y Cómo Llegar</h3>

        <div class="location-grid">
            <div class="location-info">
                <h4>¿Cómo llegar al Raymillacta?</h4>
                <p>El sitio arqueológico de Raymillacta se encuentra en la provincia de Chachapoyas, en la región
                    Amazonas del norte de Perú, aproximadamente a una hora de la ciudad de Chachapoyas.</p>

                <div class="location-details">
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div>
                            <strong>En avión:</strong> Vuelos desde Lima hasta el aeropuerto de Jaén (2 horas),
                            seguido de un traslado terrestre a Chachapoyas (4 horas).
                        </div>
                    </div>

                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div>
                            <strong>En bus:</strong> Servicios diarios desde Lima, Trujillo y Chiclayo hasta
                            Chachapoyas (22-24 horas desde Lima).
                        </div>
                    </div>

                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <div>
                            <strong>Desde Chachapoyas:</strong> Traslado en taxi o servicio de tour (1 hora) hasta
                            el punto de inicio del sendero, seguido de una caminata moderada de 40 minutos.
                        </div>
                    </div>
                </div>

                <div class="visit-options">
                    <h4>Opciones de visita</h4>
                    <ul>
                        <li>Tour guiado desde Chachapoyas (incluye transporte y guía)</li>
                        <li>Visita independiente (se recomienda contratar un guía local)</li>
                        <li>Expedición de dos días con acampada (para experiencias inmersivas)</li>
                    </ul>
                    <p><strong>Horario:</strong> 8:00 AM - 5:00 PM todos los días</p>
                    <p><strong>Mejor época para visitar:</strong> Mayo a Octubre (temporada seca)</p>
                </div>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.887459008389!2d-77.8148582857371!3d-6.27448829360027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b3e62b37c7b831%3A0x513c93a5a8999b02!2sRaymillacta!5e0!3m2!1ses-419!2spe!4v1712698061897!5m2!1ses-419!2spe"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
