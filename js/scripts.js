"use strict";

/* Acionamento do menu via click/toque */
var menu = document.getElementById("menu");
var btMenu = menu.querySelector("h2");

menu.style.maxHeight = '3em';
menu.style.overflow = 'hidden';

btMenu.addEventListener('click', function(e){
    if( menu.style.maxHeight == '3em' ){
        menu.style.maxHeight = '40em';
    } else {
        menu.style.maxHeight = '3em';
    }
    return false;
    e.preventDefault();
});



/* Carousel de Destaques */
$(document).ready(function(){
    $('.carousel-destaques').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        adaptiveHeight: false,
        arrows: false,
        infinite: false
    });
});