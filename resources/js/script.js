document.addEventListener('DOMContentLoaded', function () {
    // Loader
    setTimeout(function () {
        document.querySelector('.loader-container').style.opacity = '0';
        setTimeout(function () {
            document.querySelector('.loader-container').style.display = 'none';
        }, 700);
    }, 1000);

    // Seleccionar elementos del DOM
    const mobileNavLinks = document.querySelectorAll('.mobile-menu ul li a');
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenuBtn = document.querySelector('.close-menu');
    const scrollTopBtn = document.querySelector('.scroll-top');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.querySelector('.modal');
    const modalImg = document.querySelector('.modal-content');
    const closeModal = document.querySelector('.close-modal');
    const heroBtn = document.querySelector('.hero-btn');

    // Mobile menu toggle
    mobileMenuBtn.addEventListener('click', function () {
        mobileMenu.classList.add('active');
    });

    closeMenuBtn.addEventListener('click', function () {
        mobileMenu.classList.remove('active');
    });

    // Scroll to top button
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 300) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });

    scrollTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Galería modal
    galleryItems.forEach(item => {
        item.addEventListener('click', function () {
            const imgSrc = this.querySelector('img').src;
            modalImg.src = imgSrc;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    // Hero button redirect
    heroBtn.addEventListener('click', function () {
        const introSection = document.getElementById('intro-section');
        introSection.classList.remove('hidden');

        // Activar el enlace correspondiente
        document.querySelector('a[href="#intro-section"]').closest('li').classList.add('active');

        window.scrollTo({
            top: introSection.offsetTop - 70,
            behavior: 'smooth'
        });
    });

    // Newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const emailInput = this.querySelector('.newsletter-input');

            if (emailInput.value.trim() !== '') {
                showNotification('¡Gracias por suscribirte! Pronto recibirás noticias sobre Raymillacta.');
                emailInput.value = '';
            }
        });
    }

    // Animaciones al hacer scroll
    function animateOnScroll() {
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight * 0.75 && !section.classList.contains('hidden')) {
                section.classList.add('animate');
            }
        });
    }

    window.addEventListener('scroll', animateOnScroll);

    // Función para mostrar una notificación
    function showNotification(message) {
        // Eliminar notificaciones existentes
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => {
            document.body.removeChild(notification);
        });

        const notification = document.createElement('div');
        notification.classList.add('notification');
        notification.innerHTML = `
            <i class="fas fa-info-circle"></i>
            <span>${message}</span>
        `;

        document.body.appendChild(notification);

        // Mostrar la notificación
        setTimeout(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateY(0)';
        }, 10);

        // Ocultar la notificación después de 4 segundos
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateY(20px)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 4000);
    }

    // Simular notificación después de cargar la página
    setTimeout(() => {
        showNotification('¡Bienvenido al portal de Raymillacta! Explora todas las secciones para descubrir la magia de los Chachapoyas.');
    }, 3000);

    // Footer items click event
    const footerItems = document.querySelectorAll('.footer-item');
    footerItems.forEach(item => {
        item.addEventListener('click', function () {
            const itemText = this.querySelector('span').textContent;
            showNotification(`Función de ${itemText} próximamente disponible.`);
        });
    });

    // Añadir efectos interactivos a los elementos de la galería
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('mouseenter', function () {
            this.querySelector('.gallery-caption').style.transform = 'translateY(0)';
            this.querySelector('.gallery-caption').style.opacity = '1';
        });

        item.addEventListener('mouseleave', function () {
            this.querySelector('.gallery-caption').style.transform = 'translateY(20px)';
            this.querySelector('.gallery-caption').style.opacity = '0';
        });
    });
});
