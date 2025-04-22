<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raymi Llaqta de Chachapoyas</title>
    <link rel="stylesheet" href="/resources/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite(['resources/css/styles.css', 'resources/js/script.js', 'resources/css/app.css'])
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <header>
        <nav>
            <div class="logo">Raymi Llacta</div>
            <ul>
                <li class="active"><a href="#intro-section">Inicio</a></li>
                <li><a href="#history-section">Historia</a></li>
                <li><a href="#gallery-section">Galería</a></li>
                <li><a href="#location-section">Ubicación</a></li>
                <li><a href="#testimonials-section">Testimonios</a></li>
                @if (Auth::user()->tipo === "admin")
                    <li><a href="{{ route('dashboard-admin.index') }}">Dashboard</a></li>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="ml-4 bg-transparent rounded-2xl text-blue-600 py-1 px-2 border-blue-600 border-2 hover:bg-blue-600 hover:text-white items-center">Cerrar
                        sesion</button>
                </form>
            </ul>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
            <div>

            </div>
        </nav>
    </header>

    <div class="mobile-menu">
        <button class="close-menu"><i class="fas fa-times"></i></button>
        <ul>
            <li class="active"><a href="#intro-section">Inicio</a></li>
            <li><a href="#history-section">Historia</a></li>
            <li><a href="#gallery-section">Galería</a></li>
            <li><a href="#location-section">Ubicación</a></li>
            <li><a href="#testimonials-section">Testimonios</a></li>
            @if (Auth::user()->tipo === "admin")
                    <li><a href="{{ route('dashboard-admin.index') }}">Dashboard</a></li>
            @endif
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Cerrar sesion</button>
            </form>
        </ul>
    </div>

    <main class="container">
        <section id="intro-section" class="section">
            <div class="intro-image">
                <div class="intro-overlay">
                    <h1 class="intro-title">Descubre Raymillacta</h1>
                    <p class="intro-text">Un viaje al corazón de la cultura Chachapoyas.</p>
                    <button class="hero-btn">Explorar</button>
                </div>
            </div>
        </section>

        <section id="history-section" class="section hidden">
            <h3>Historia y Legado de los Chachapoyas</h3>
            <p>Los Chachapoyas fueron una cultura pre-inca que alcanzó su apogeo entre los años 900 y 1470 d.C. Su
                nombre, que significa "Pueblo de las Nubes", refleja la ubicación de sus asentamientos en las tierras
                altas nubladas del norte de Perú.</p>

            <div class="history-timeline">
                <div class="timeline-item">
                    <div class="timeline-date">800 d.C.</div>
                    <div class="timeline-content">
                        <h4>Orígenes de la cultura Chachapoyas</h4>
                        <p>Evidencias arqueológicas sugieren el establecimiento inicial de los Chachapoyas en la región
                            montañosa de Amazonas, desarrollando una identidad cultural distintiva y adaptándose al
                            terreno escarpado.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">1000 d.C.</div>
                    <div class="timeline-content">
                        <h4>Construcción del Raymillacta</h4>
                        <p>Durante este período, los Chachapoyas construyen el complejo de Raymillacta como centro
                            administrativo y ceremonial, demostrando avanzadas técnicas de ingeniería y arquitectura con
                            sus estructuras circulares de piedra.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">1470 d.C.</div>
                    <div class="timeline-content">
                        <h4>Incorporación al Imperio Inca</h4>
                        <p>Tras una fuerte resistencia, los Chachapoyas son finalmente conquistados e incorporados al
                            Imperio Inca bajo el mandato de Túpac Inca Yupanqui, aunque mantienen muchas de sus
                            tradiciones culturales.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">1535 d.C.</div>
                    <div class="timeline-content">
                        <h4>Llegada de los españoles</h4>
                        <p>Con la conquista española, la región de los Chachapoyas experimenta profundos cambios. La
                            población nativa disminuye dramáticamente debido a enfermedades y conflictos, y muchos
                            sitios como Raymillacta son abandonados.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">1843 d.C.</div>
                    <div class="timeline-content">
                        <h4>Redescubrimiento</h4>
                        <p>El explorador Antonio Raimondi documenta la existencia de numerosos sitios arqueológicos en
                            la región, incluyendo referencias a las ruinas del Raymillacta, despertando interés
                            científico en la cultura Chachapoyas.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2000 d.C.</div>
                    <div class="timeline-content">
                        <h4>Investigaciones modernas</h4>
                        <p>Arqueólogos peruanos e internacionales inician excavaciones sistemáticas en el Raymillacta,
                            revelando nuevos hallazgos sobre las prácticas funerarias, arquitectónicas y culturales de
                            los Chachapoyas.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery-section" class="section hidden">
            <h3 class="mt-0">Galería de Imágenes</h3>
            <p>Explora la belleza y el misterio del Raymillacta a través de nuestra colección de imágenes que capturan
                la esencia de este extraordinario sitio arqueológico.</p>

            {{-- Mostrar las fotos almacenadas en la DB--}}
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 w-full">
                @forelse ($fotos as $foto)
                    <a href="{{ route('fotos.show', $foto->id )}}" class="bg-white shadow p-2 rounded-[10px] h-auto transition-all duration-300 cursor-pointer !text-black transform-duration hover:scale-105">
                        <img src="{{ asset('storage/' . $foto->ruta) }}" alt="img"
                            class="rounded-[10px] h-50 w-full">
                        <h1 class="font-medium">{{ $foto->titulo }}</h1>
                        <p>{{ $foto->descripcion }}</p>
                    </a>
                @empty
                <div class="bg-white rounded-[10px] shadow-2xl p-2 !w-full">
                    <p class="text-center font-medium w-full">No hay nada aqui</p>
                </div>
                @endforelse
            </div>


        </section>

        <div class="modal">
            <button class="close-modal"><i class="fas fa-times"></i></button>
            <img class="modal-content" src="" alt="Imagen ampliada">
        </div>

        <section id="location-section" class="section hidden">
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

        <section id="testimonials-section" class="section hidden">
            <h3>Lo que dicen nuestros visitantes</h3>
            <p>Experiencias auténticas compartidas por viajeros que han explorado el fascinante mundo de los Chachapoyas
                en Raymillacta.</p>

            <div class="testimonials-container">
                <div class="testimonial-card">
                    <i class="fas fa-quote-right testimonial-quote"></i>
                    <p class="testimonial-text">"Una de las experiencias más impresionantes de mi visita a Perú. El
                        sitio está extraordinariamente conservado y las vistas desde la cima son absolutamente
                        espectaculares. Nuestro guía local compartió fascinantes historias sobre los Chachapoyas."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <img src="/api/placeholder/100/100" alt="María González">
                        </div>
                        <div class="testimonial-info">
                            <h4>María González</h4>
                            <p>España</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right testimonial-quote"></i>
                    <p class="testimonial-text">"Como arqueólogo aficionado, visitar Raymillacta fue un sueño hecho
                        realidad. La arquitectura circular, la ubicación estratégica y la historia de resistencia de los
                        Chachapoyas hacen de este sitio un lugar único. Recomiendo ir temprano para evitar multitudes."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <img src="/api/placeholder/100/100" alt="John Smith">
                        </div>
                        <div class="testimonial-info">
                            <h4>John Smith</h4>
                            <p>Estados Unidos</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right testimonial-quote"></i>
                    <p class="testimonial-text">"La caminata hasta Raymillacta es moderada pero muy gratificante. El
                        paisaje de montaña es impresionante y cuando finalmente llegas al sitio arqueológico, la
                        sensación es indescriptible. Definitivamente vale la pena el esfuerzo."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <img src="/api/placeholder/100/100" alt="Luisa Mendoza">
                        </div>
                        <div class="testimonial-info">
                            <h4>Luisa Mendoza</h4>
                            <p>Chile</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="newsletter">
                <h3>Suscríbete a nuestro boletín</h3>
                <p>Recibe las últimas noticias, descubrimientos arqueológicos y consejos de viaje sobre Raymillacta y
                    otros sitios Chachapoyas.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Ingresa tu correo electrónico">
                    <button type="submit" class="newsletter-btn">Suscribirse</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h4>Raymillacta</h4>
                <p>Descubre la magia de uno de los sitios arqueológicos más importantes de la cultura Chachapoyas,
                    conocida como los "Guerreros de las Nubes".</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Enlaces Rápidos</h4>
                <ul class="footer-links">
                    <li><a href="#intro-section"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                    <li><a href="#history-section"><i class="fas fa-chevron-right"></i> Historia</a></li>
                    <li><a href="#gallery-section"><i class="fas fa-chevron-right"></i> Galería</a></li>
                    <li><a href="#location-section"><i class="fas fa-chevron-right"></i> Ubicación</a></li>
                    <li><a href="#testimonials-section"><i class="fas fa-chevron-right"></i> Testimonios</a></li>
                </ul>
            </div>

            <div class="footer-footer-column">
                <h4>Explora Más</h4>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Kuélap</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Sarcófagos de Karajía</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Laguna de los Cóndores</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Gocta Waterfall</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Museo Leymebamba</a></li>
                </ul>
            </div>

            <div class="footer-column footer-contact">
                <h4>Contacto</h4>
                <p><i class="fas fa-map-marker-alt"></i> Centro de Visitantes, Chachapoyas, Amazonas, Perú</p>
                <p><i class="fas fa-phone"></i> +51 945 678 123</p>
                <p><i class="fas fa-envelope"></i> info@raymillacta.pe</p>
                <p><i class="fas fa-clock"></i> Lunes - Domingo: 8:00 AM - 5:00 PM</p>
            </div>
        </div>


        <div class="copyright">
            <p>© 2025 Raymillacta de los Chachapoyas. Todos los derechos reservados.</p>
        </div>
    </footer>

    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script src="/resources/js/script.js"></script>
</body>
</html>
