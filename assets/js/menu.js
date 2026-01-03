/**
 * Gestion du menu mobile pour cv-christophe-millot-2026
 */
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('js-burger');
    const menu = document.getElementById('js-nav-menu');

    if (burger && menu) {
        burger.addEventListener('click', () => {
            // Déclenche l'affichage de l'overlay gris (État 02b)
            menu.classList.toggle('is-open');
            
            // Permet d'animer le burger ou de changer son état si besoin
            burger.classList.toggle('is-active');
        });
    }
});