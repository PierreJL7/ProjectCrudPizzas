//Barra de navegacion
const navTogle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

navTogle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu_visible");
});
 
//Slider
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length-1]; //de esta manera obtengo al ultimo slider, no importa la cantidad de sliders

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");


slider.insertAdjacentElement('afterbegin',sliderSectionLast);

function Next(){

    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];//de los 3 slider agarra el primero por  el [0]
    slider.style.marginLeft = "-200%"; //avanza el slider
    slider.stlye.transition = "all 0.5s"; //se da un tiempo
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    },500);
}

function Prev(){
    let sliderSection = document.querySelectorAll("slider__section");
    let sliderSectionLast = document.querySelectorAll(".slider__section")[0];//de los 3 slider agarra el primero por  el [0]
    slider.style.marginLeft = "0"; //avanza el slider
    slider.stlye.transition = "all 0.5s"; //se da un tiempo
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.style.marginLeft = "-100%";
    },500);
}



btnRight.addEventListener('click', function(){
    Next();
});


btnLeft.addEventListener('click', function(){
    Prev();
});

/* setInterval(function(){
    Next();
}, 5000); */