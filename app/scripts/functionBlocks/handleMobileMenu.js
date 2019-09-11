const burger = $('.nav__burger');
const scroller = $('.scroller');

$(burger).on('click', function() {
    $('body').toggleClass('stop_scroll');
    $('.burger_menu').toggleClass('active');
});

$(scroller).on('click', function () {
    $('body').removeClass('stop_scroll');
    $('.burger_menu').removeClass('active');

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 800);
});