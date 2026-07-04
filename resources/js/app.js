import './bootstrap';
import './btn-siderbar-web';

/* =========================
   SUCCESS MESSAGE
========================= */

document.addEventListener("DOMContentLoaded", () => {

    const success = document.getElementById('success');

    if (!success) return;

    setTimeout(() => {
        success.style.opacity = "0";

        setTimeout(() => {
            success.style.display = "none";
        }, 500);

    }, 5000);
});