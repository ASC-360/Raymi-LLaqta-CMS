import './bootstrap';

const siderbar = document.getElementById('siderbar');

const buttonSiderbar = document.getElementById('button_siderbar');

const btnCerrarSiderbar = document.getElementById('cerrar_siderbar');


// Siderbar evento
buttonSiderbar.addEventListener('click', () => {

    if (window.innerWidth < 700) {
        siderbar.classList.toggle('w-full');
    } else {
        siderbar.classList.toggle('w-70');
    }
});

btnCerrarSiderbar.addEventListener('click', () => {
    siderbar.classList.remove('w-full', 'w-70')
})

// Dark Mode
const btnDarkMode = document.getElementById('toogle_boton');

if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

btnDarkMode.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');

    localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
});


