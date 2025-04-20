<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre Raymillacta, un enclave arqueológico de los Chachapoyas en Perú. Historia, galería de imágenes, ubicación y testimonios.">
    <title>Raymillacta de los Chachapoyas: Un Legado en las Nubes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/styles(1).css', 'resources/js/script(1).js'])
</head>
<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <header>
        <nav class="nav-container">
            <div class="logo">Raymillacta</div>
            <ul class="main-nav">
                <li class="active"><a href="#home">Inicio</a></li>
                <li><a href="#history">Historia</a></li>
                <li><a href="#gallery">Galería</a></li>
                <li><a href="#location">Ubicación</a></li>
                <li><a href="#testimonials">Testimonios</a></li>
                <li><a href="#discover">Descubre Más</a></li>
            </ul>
            <button class="mobile-menu-btn" aria-label="Abrir menú móvil"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    <div class="mobile-menu">
        <button class="close-menu" aria-label="Cerrar menú móvil"><i class="fas fa-times"></i></button>
        <ul class="mobile-nav">
            <li class="active"><a href="#home">Inicio</a></li>
            <li><a href="#history">Historia</a></li>
            <li><a href="#gallery">Galería</a></li>
            <li><a href="#location">Ubicación</a></li>
            <li><a href="#testimonials">Testimonios</a></li>
            <li><a href="#discover">Descubre Más</a></li>
        </ul>
    </div>

    <main class="main-content">
        <section id="home" class="hero-section">
            <div class="hero-image-overlay"></div>
            <div class="hero-content">
                <img src="{{ asset('img/DSC_1821.JPG') }}" alt="Banner Oficial de Raymillacta" class="hero-banner-img">
                <h1 class="hero-title">Raymillacta</h1>
                <p class="hero-subtitle">El Corazón del Pueblo de las Nubes</p>
                <p class="hero-summary">Adéntrate en la majestuosidad de Raymillacta, un enclave arqueológico que revela los secretos de la cultura Chachapoyas en un entorno natural impresionante.</p>
                <button class="hero-button" onclick="scrollToSection('history')">Explorar el Legado</button>
            </div>
        </section>

        <section id="history" class="section hidden">
            <div class="section-title-container">
                <h2 class="section-title">Historia y Misterios de los Chachapoyas</h2>
                <div class="title-separator"></div>
            </div>
            <p class="section-intro">Descubre la fascinante trayectoria del "Pueblo de las Nubes", una civilización pre-inca con una identidad cultural única y una adaptación sorprendente a las desafiantes tierras altas del Amazonas peruano.</p>
            <div class="history-timeline">
                <div class="timeline-item">
                    <div class="timeline-date">800 d.C.</div>
                    <div class="timeline-content">
                        <h3>Orígenes en las Montañas</h3>
                        <p>Las primeras evidencias sugieren que los Chachapoyas se asentaron en las escarpadas regiones montañosas de Amazonas, forjando una cultura distintiva en armonía con su entorno.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery" class="section hidden">
            <div class="section-title-container">
                <h2 class="section-title">Un Viaje Visual por Raymillacta</h2>
                <div class="title-separator"></div>
            </div>
            <p class="section-intro">Sumérgete en la atmósfera mágica de Raymillacta a través de nuestra galería de imágenes, capturando la grandiosidad de su arquitectura y el esplendor natural que la rodea.</p>
            <div class="gallery-grid">
                <div class="gallery-item" onclick="openModal('assets/galeria/raymillacta-1.jpg', 'Vista panorámica del Raymillacta')">
                    <img src="assets/galeria/raymillacta-1-thumb.jpg" alt="Vista panorámica del Raymillacta">
                    <div class="gallery-overlay">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
            </div>
        </section>

        <div class="image-modal" id="imageModal">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage" src="" alt="Imagen Ampliada">
            <div id="caption"></div>
        </div>

        <section id="location" class="section hidden">
            <div class="section-title-container">
                <h2 class="section-title">Descubre la Ubicación de Raymillacta</h2>
                <div class="title-separator"></div>
            </div>
            <div class="location-details">
                <div class="location-info">
                    <h3>¿Cómo Llegar?</h3>
                    <p>Raymillacta se encuentra en la provincia de Chachapoyas, en la región Amazonas de Perú, aproximadamente a una hora en coche desde la ciudad de Chachapoyas.</p>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d...tu_mapa_de_raymillacta..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <section id="testimonials" class="section hidden">
            <div class="section-title-container">
                <h2 class="section-title">Voces de Exploradores</h2>
                <div class="title-separator"></div>
            </div>
            <p class="section-intro">Lee las experiencias de otros viajeros que se han maravillado con la historia y la belleza de Raymillacta.</p>
            <div class="testimonials-slider">
                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right testimonial-quote"></i>
                        <p class="testimonial-text">"Un lugar que te transporta en el tiempo. La energía del sitio es palpable y las vistas son impresionantes."</p>
                        <div class="testimonial-author">
                            <img src="assets/avatares/avatar-1.jpg" alt="Elena Rodríguez">
                            <div class="author-info">
                                <h4>Elena Rodríguez</h4>
                                <p>Viajera apasionada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev-slide"><i class="fas fa-chevron-left"></i></button>
                <button class="next-slide"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>

        <section id="discover" class="cta-section">
            <div class="cta-content">
                <h2>¿Listo para tu Aventura en Raymillacta?</h2>
                <p>Planifica tu visita y experimenta la magia de la cultura Chachapoyas en un entorno natural único.</p>
                <button class="cta-button">Planificar mi Viaje</button>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Raymillacta</h3>
                <p>Un portal al pasado glorioso de los Chachapoyas, esperando ser descubierto.</p>
            </div>
            <div class="footer-column">
                <h3>Enlaces Útiles</h3>
                <ul class="footer-links">
                    <li><a href="#home"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                    <li><a href="#history"><i class="fas fa-chevron-right"></i> Historia</a></li>
                    <li><a href="#gallery"><i class="fas fa-chevron-right"></i> Galería</a></li>
                    <li><a href="#location"><i class="fas fa-chevron-right"></i> Ubicación</a></li>
                    <li><a href="#testimonials"><i class="fas fa-chevron-right"></i> Testimonios</a></li>
                    <li><a href="#discover"><i class="fas fa-chevron-right"></i> Descubre Más</a></li>
                </ul>
            </div>
            <div class="footer-column footer-contact">
                <h3>Contacto</h3>
                <p><i class="fas fa-map-marker-alt"></i> Chachapoyas, Amazonas, Perú</p>
                <p><i class="fas fa-phone"></i> +51 945 678 123</p>
                <p><i class="fas fa-envelope"></i> info@raymillacta.pe</p>
            </div>
        </div>
        <div class="copyright">
            <p>© 2025 Raymillacta de los Chachapoyas. Todos los derechos reservados.</p>
        </div>
    </footer>

    <div class="scroll-top" aria-label="Volver al inicio">
        <i class="fas fa-arrow-up"></i>
    </div>

</body>
</html>
