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


