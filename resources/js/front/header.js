let lastScrollTop = 0;
const $header = $('header');
const $headerButton = $('#headerMenuToggler');

$(window).scroll(function() {
    const scrollTop = $(window).scrollTop();

    if (scrollTop > 0)
        $header.addClass('active');

    if (scrollTop <= 44 )
        $header.removeClass('active');

    if (scrollTop > lastScrollTop) {
        $header.addClass('hidden');
        if (!$headerButton.hasClass('collapsed'))
            $headerButton.trigger('click');
    }
    else
        $header.removeClass('hidden');

    lastScrollTop = scrollTop;
});
