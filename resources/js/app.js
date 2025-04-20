import './bootstrap';

const siderbar = document.getElementById('siderbar');
const buttonSiderbar = document.getElementById('button_siderbar');
const img = document.getElementById('img');

const zoom = false;

const btnCerrarSiderbar = document.getElementById('cerrar_siderbar');

buttonSiderbar.addEventListener('click', () => {
    siderbar.classList.toggle('active');
});

btnCerrarSiderbar.addEventListener('click', () => {
    siderbar.classList.remove('active');
})

img.addEventListener('click', () => {

    zoom = true;

    if (zoom) {
        img.classList.add('scale-150');
    } else {
        img.classList.remove('scale-150');
    }
})
