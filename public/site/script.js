$(document).ready(e => {

    $('.index-slider').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        randomStart: true,
        infiniteLoop: true,
        pager: false,
        auto: true,
        nextText: '.',
        prevText: '.',
        slideWidth: 600
    });

});