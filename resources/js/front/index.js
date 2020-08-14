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

    $('#top').click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 1000);
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
    navText:['<span class="carousel-control-prev-icon" aria-hidden="true"></span>','<span class="carousel-control-next-icon" aria-hidden="true"></span>'],
    responsive:{
        0:{
            items:1
        },
        700:{
            items:3
        }
    }
});
