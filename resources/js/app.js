require('./bootstrap')
try {
    window.$ = window.jQuery = require('jquery')

    require('bootstrap')
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

window.$ = window.jQuery = require('jquery')

require('./accordion')

// START - Virtual tour mouse events
let $virtualTourDiv = $('.virtual-tour-parent')

if (typeof $virtualTourDiv !== 'undefined') {
    $virtualTourDiv.click(function () {
        $('iframe', this).css('pointer-events', 'auto')
    })

    $virtualTourDiv.mouseleave(function () {
        $('iframe', this).css('pointer-events', 'none')
    })

    $('.virtual-tour-parent iframe').css('pointer-events', 'none')
}
// END - Virtual tour mouse events

//Início - PhotoSwipe
import PhotoSwipeLightbox from 'photoswipe/lightbox'

const lightbox = new PhotoSwipeLightbox({
    gallery: '#photo-gallery',
    children: 'a',
    pswpModule: () => import('photoswipe'),
})
lightbox.init()
//FIM - PhotoSwipe
