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
