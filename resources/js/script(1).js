document.addEventListener('DOMContentLoaded', function() {
    // Loader
    const loaderContainer = document.querySelector('.loader-container');
    if (loaderContainer) {
        window.addEventListener('load', function() {
            loaderContainer.style.opacity = '0';
            setTimeout(() => {
                loaderContainer.style.display = 'none';
            }, 700);
        });
    } else {
        console.error('No se encontró .loader-container');
    }

    // Elementos del DOM
    const navLinks = document.querySelectorAll('nav ul li a');
    const mobileNavLinks = document.querySelectorAll('.mobile-menu ul li a');
    const sections = document.querySelectorAll('.section');
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenuBtn = document.querySelector('.close-menu');
    const scrollTopBtn = document.querySelector('.scroll-top');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.querySelector('.image-modal');
    const modalImg = document.querySelector('.modal-content');
    const closeModalBtn = document.querySelector('.close-button');

    // Navegación
    function navigateToSection(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);
        if (!targetSection) {
            console.error(`Sección no encontrada: ${targetId}`);
            return;
        }
        sections.forEach(section => section.classList.add('hidden'));
        targetSection.classList.remove('hidden');
        targetSection.classList.add('animate');
        navLinks.forEach(link => link.closest('li').classList.remove('active'));
        mobileNavLinks.forEach(link => link.closest('li').classList.remove('active'));
        document.querySelectorAll(`a[href="#${targetId}"]`).forEach(link => {
            link.closest('li').classList.add('active');
        });
        mobileMenu.classList.remove('active');
        window.scrollTo({ top: targetSection.offsetTop - 70, behavior: 'smooth' });
    }

    navLinks.forEach(link => link.addEventListener('click', navigateToSection));
    mobileNavLinks.forEach(link => link.addEventListener('click', navigateToSection));

    // Menú móvil
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.add('active'));
    }
    if (closeMenuBtn && mobileMenu) {
        closeMenuBtn.addEventListener('click', () => mobileMenu.classList.remove('active'));
    }

    // Scroll top
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            scrollTopBtn.classList.toggle('visible', window.pageYOffset > 300);
        });
        scrollTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // Galería modal
    if (modal && modalImg && closeModalBtn) {
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                modalImg.src = this.querySelector('img').src;
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        });
        closeModalBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    }

    // Animaciones al hacer scroll
    function animateOnScroll() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            if (sectionTop < window.innerHeight * 0.75 && !section.classList.contains('hidden')) {
                section.classList.add('animate');
            }
        });
    }
    window.addEventListener('scroll', animateOnScroll);
});
