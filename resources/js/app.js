

import './bootstrap';

import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';  // Importar Swiper completo
import 'swiper/css/bundle';  // Importar todos los estilos de Swiper

console.log('JS cargado correctamente');

window.Alpine = Alpine;
Alpine.start();

// Llamada al carrusel de imágenes
const swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 10,
    // pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false, // Para que no se detenga al hacer clic
    }
});

// Evento para oscurecer un poco la barra de navegación al hacer scroll hacia abajo
document.addEventListener("scroll", function() {
    const nav = document.querySelector("nav");
    if (window.scrollY > 50) {
        nav.style.background = "rgba(0, 0, 0, 0.5)";
    } else {
        nav.style.background = "rgba(0, 0, 0, 0.0)";
    }
});

//Evento para borrar la búsqueda si clicko fuera de la barra
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.querySelector("input[name='query']");
    const searchForm = document.querySelector(".search-bar form");

    document.addEventListener("click", function(event) {
        // Verifica si el clic fue fuera del formulario de búsqueda
        if (!searchForm.contains(event.target)) {
            searchInput.value = ""; // Borra el valor del input
        }
    });
});