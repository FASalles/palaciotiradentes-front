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

const options = {
    gallery: '#photo-gallery',
    children: 'a',
    pswpModule: () => import('photoswipe'),
}
const lightbox = new PhotoSwipeLightbox(options)
lightbox.on('uiRegister', function () {
    lightbox.pswp.ui.registerElement({
        name: 'custom-caption',
        order: 9,
        isButton: false,
        appendTo: 'root',
        html: 'Caption text',
        onInit: (el, pswp) => {
            lightbox.pswp.on('change', () => {
                const currSlideElement = lightbox.pswp.currSlide.data.element
                let captionHTML = ''
                if (currSlideElement) {
                    const hiddenCaption = currSlideElement.querySelector('.hidden-caption-content')
                    if (hiddenCaption) {
                        // get caption from element with class hidden-caption-content
                        captionHTML = hiddenCaption.innerHTML
                    } else {
                        // get caption from alt attribute
                        captionHTML = currSlideElement.querySelector('img').getAttribute('caption')
                    }
                }
                el.innerHTML = captionHTML || ''
            })
        },
    })
})

lightbox.init()
//FIM - PhotoSwipe
