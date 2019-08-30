// Scroll hiding Control
// ***********************************************************************

// When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar

let prevScrollPos = window.pageYOffset;

$(window).scroll(function () {
    let currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        document.querySelector(".header").style.top = '0';
    } else {
        let headerHeight = $('.header').innerHeight();
        document.querySelector(".header").style.top = '-'+headerHeight+'px';
    }

    prevScrollPos = currentScrollPos;
});

// Dropdown Control
// ***********************************************************************

$('.dropper').hover(function() {
    expandHeader()
});

$('.header').mouseleave(function () {
    collapseHeader()
})

// This is the important part!

function collapseHeader() {

    let element = document.querySelector('.dropdown-menu');

    // get the height of the element's inner content, regardless of its actual size
    let sectionHeight = element.scrollHeight;

    // temporarily disable all css transitions
    let elementTransition = element.style.transition;
    element.style.transition = '';

    // on the next frame (as soon as the previous style change has taken effect),
    // explicitly set the element's height to its current pixel height, so we
    // aren't transitioning out of 'auto'
    requestAnimationFrame(function() {
        element.style.height = sectionHeight + 'px';
        element.style.transition = elementTransition;

        // on the next frame (as soon as the previous style change has taken effect),
        // have the element transition to height: 0
        requestAnimationFrame(function() {
            element.style.height = 0 + 'px';
        });
    });
}

function expandHeader() {

    let element = document.querySelector('.dropdown-menu');

    // get the height of the element's inner content, regardless of its actual size
    let sectionHeight = element.scrollHeight;

    // have the element transition to the height of its inner content
    element.style.height = sectionHeight + 'px';

    // when the next css transition finishes (which should be the one we just triggered)
    element.addEventListener('transitionend', function(e) {
        // remove this event listener so it only gets triggered once
        element.removeEventListener('transitionend', arguments.callee);

        // remove "height" from the element's inline styles, so it can return to its initial value
        element.style.height = null;
    });
}