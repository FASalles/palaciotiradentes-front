require("./bootstrap");
try {
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

// var Swiper = require('swiper').default

// init Swiper:
// window.swiper = new Swiper('.swiper', {
//     // Optional parameters
//     direction: 'vertical',
//     loop: true,
//
//     // If we need pagination
//     pagination: {
//         el: '.swiper-pagination',
//     },
//
//     // Navigation arrows
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// })

window.$ = window.jQuery = require("jquery");

require("./accordion");


// START - Virtual tour mouse events
$virtualTourDiv = $(".virtual-tour-parent");

$virtualTourDiv.click(function() {
    $("iframe", this).css("pointer-events", "auto")
})

$virtualTourDiv.mouseleave(function() {
    $("iframe", this).css("pointer-events", "none")
})

$(".virtual-tour-parent iframe").css("pointer-events", "none")

// END - Virtual tour mouse events