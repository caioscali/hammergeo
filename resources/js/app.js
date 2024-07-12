import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

//JQuery
$(document).ready(function () {
    $(".modal").modal();
    $(".sidenav").sidenav();
    $(".slider").slider();
    $(".materialboxed").materialbox();
    $(".parallax").parallax();
    $(".carousel").carousel({
        duration: 5000,
        dist: 100,
        shift: 10,
        padding: 14,
        numVisible: 5,
        fullWidth: false,
        indicators: true,
        noWrap: true,
    });

    //Configurações JQuery Mask
    $("#tel").mask("(00) 00000 0000");
    $("#tel1").mask("(00) 00000 0000");
});
new Swiper(".swiper", {
    slidesPerView: 1,
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 4,
        },
    },
    loop: true,
    pagination: { clickable: true },
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
    },
});
new Swiper(".swiperObras", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 50,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 2,
        },
        1680: {
            slidesPerView: 4,
        },
    },
});
