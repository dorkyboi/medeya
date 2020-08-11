require('./bootstrap');

$(window).scroll(function(){
    if ($(window).scrollTop() > 0) {
        $('header').addClass('active');
    }
    if ( $(window).scrollTop() <= 44 ){
        $('header').removeClass('active');
    }
});

$(document).ready(function () {

    $('.message-close-js').on('click', function(){
        $('.message').addClass('d-none');
    });



});

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    smartSpeed: 1000,
    margin:10,
    dots:true,
    nav:true,
    navText:['<','>'],
    responsive:{
        0:{
            items:1
        },
        1000:{
            items:3
        }
    }
});
