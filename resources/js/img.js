const img_show = document.getElementById('img_show');

let zoom = false;

img_show.addEventListener('click', () => {

    if (!zoom) {
        img_show.classList.add('active');
        zoom = true;
    } else {
        img_show.classList.remove('active');
        zoom = false;
    }
});
