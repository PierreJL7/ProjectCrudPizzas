//Barra de navegacion
const navTogle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

navTogle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu_visible");
});