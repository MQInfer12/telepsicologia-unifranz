document.querySelector(".menu-barra").addEventListener("click",animacion);

var bar1 =document.querySelector(".bar1");
var bar2 =document.querySelector(".bar2");
var bar3 =document.querySelector(".bar3");
var ul1 = document.querySelector(".navbar"); 

function animacion(){
    bar1.classList.toggle("activebar1");
    bar2.classList.toggle("activebar2");
    bar3.classList.toggle("activebar3");
    ul1.classList.toggle("activenavbar");
}