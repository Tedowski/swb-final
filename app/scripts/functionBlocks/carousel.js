
function initCarousel(options) {

    // default settings
    let settings = {
        target: this,
        speed: '.3s',
        easing: 'ease-in-out'
    }

    // select slider and slides
    const CAROUSEL_CONTAINER = $(options.target).find('.carousel-slider');
    let CAROUSEL_SLIDES = $(options.target).find('.carousel-slide');

    const CONTAINER_WIDTH = CAROUSEL_CONTAINER.innerWidth();

    // append buttons to the container
    const BUTTON_PREV = $('<button />', {
        class: 'carousel-button',
        id: 'carPrev'
    });

    const BUTTON_NEXT = $('<button />', {
        class: 'carousel-button',
        id: 'carNext'
    });

    $(BUTTON_PREV).append('<i class="fas fa-arrow-left"></i>');
    $(BUTTON_NEXT).append('<i class="fas fa-arrow-right"></i>');

    $(options.target).append(BUTTON_PREV);
    $(options.target).append(BUTTON_NEXT);

    // select first and last items in slide array
    let COPY_FIRST = $(CAROUSEL_SLIDES[0]).clone();
    let COPY_LAST = $(CAROUSEL_SLIDES[CAROUSEL_SLIDES.length - 1]).clone();

    // make their copies with ids lastClone and firstClone
    COPY_FIRST.attr('id', 'firstClone');
    COPY_LAST.attr('id', 'lastClone');


    // prepend lastClone and append firstClone
    COPY_FIRST.appendTo(CAROUSEL_CONTAINER);
    COPY_LAST.prependTo(CAROUSEL_CONTAINER);

    // update slides array
    CAROUSEL_SLIDES = $(options.target || settings.target).find('.carousel-slide');


    // counter
    let CAROUSEL_COUNTER = 1;

    //
    slideCarousel(CONTAINER_WIDTH, CAROUSEL_COUNTER);

    function slideCarousel(size, counter) {
        CAROUSEL_SLIDES.css('transform', 'translateX(' + (-size * counter) + 'px');
    }

    // button handlers
    BUTTON_NEXT.on('click', function() {
        if (CAROUSEL_COUNTER >= CAROUSEL_SLIDES.length -1) {
            return;
        }
        CAROUSEL_SLIDES.css('transition', `transform ${options.speed || settings.speed} ${options.easing || settings.easing}`);
        CAROUSEL_COUNTER++;
        slideCarousel(CONTAINER_WIDTH, CAROUSEL_COUNTER);
    });

    BUTTON_PREV.on('click', function() {
        if (CAROUSEL_COUNTER <= 0) {
            return;
        }
        CAROUSEL_SLIDES.css('transition', `transform ${options.speed || settings.speed} ${options.easing || settings.easing}`);
        CAROUSEL_COUNTER--;
        slideCarousel(CONTAINER_WIDTH, CAROUSEL_COUNTER);
    });


    //handle loop
    CAROUSEL_SLIDES.on('transitionend webkitTransitionEnd oTransitionEnd', function () {

        if (CAROUSEL_SLIDES[CAROUSEL_COUNTER].id === 'lastClone') {

            CAROUSEL_SLIDES.css('transition', 'none');
            CAROUSEL_COUNTER = CAROUSEL_SLIDES.length - 2;
            slideCarousel(CONTAINER_WIDTH, CAROUSEL_COUNTER);
        }

        if (CAROUSEL_SLIDES[CAROUSEL_COUNTER].id === 'firstClone') {

            CAROUSEL_SLIDES.css('transition', 'none');
            CAROUSEL_COUNTER = CAROUSEL_SLIDES.length - CAROUSEL_COUNTER;
            slideCarousel(CONTAINER_WIDTH, CAROUSEL_COUNTER);
        }
    });
}



$('.carousel-container').each(function() {
    let target = this;

    initCarousel({
        target: target
    })
});