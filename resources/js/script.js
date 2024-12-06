/******/ (() => { // webpackBootstrap
    /*!********************************!*\
      !*** ./resources/js/script.js ***!
      \********************************/
    $(function () {
        console.log(5);
    });
    $(document).ready(function () {});
    $('.home-banner-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.explore-drive-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        stagePadding:20,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.home-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /******/ })()
;
