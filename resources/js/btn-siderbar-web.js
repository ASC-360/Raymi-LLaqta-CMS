document.addEventListener("DOMContentLoaded", () => {

    const menu = document.querySelector(".mobile-menu");
    const openBtn = document.querySelector(".mobile-menu-btn");
    const closeBtn = document.querySelector(".close-menu");

    if (!menu || !openBtn || !closeBtn) return;

    const openMenu = () => {
        menu.classList.remove("hidden");
        menu.classList.add("flex");
    };

    const closeMenu = () => {
        menu.classList.add("hidden");
        menu.classList.remove("flex");
    };

    openBtn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
});