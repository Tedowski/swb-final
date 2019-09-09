$(document).ready(function() {
   $('.body').css('overflow', 'hidden');
   $('.wrapper, .header, .footer').hide();

   $(window).on('load', function() {
       $('.body').css('overflow', 'auto');
       $('.loader').fadeOut(500);
       $('.wrapper, .header, .footer').fadeIn(800);

       const slideUp = {
           distance: '100%',
           origin: 'bottom',
           opacity: 0,
           delay: 800,
           mobile: false
       };

       const slideLeft = {
           distance: '50%',
           origin: 'right',
           opacity: 0,
           delay: 300,
           duration: 800,
           mobile: false
       };

       //trigger animation on reveal events here
       ScrollReveal().reveal('.heading', slideUp);
       ScrollReveal().reveal('.title', slideLeft);
       ScrollReveal().reveal('.subtitle', {
           delay: 500,
           duration: 1000,
           mobile: false
       });

       const challenges = $('.item__challenge');
       let delayChalleneges = 5;

       $(challenges).each(function () {
           ScrollReveal().reveal(this, {
               delay: delayChalleneges * 100,
               distance: '50%',
               origin: 'bottom',
               opacity: 0,
               mobile: false
           });

           delayChalleneges++
       });

       const sponsors = $('.sponsor');
       let delaySponsors = 5;

       $(sponsors).each(function () {
           ScrollReveal().reveal(this, {
               delay: delaySponsors * 100,
               distance: '50%',
               origin: 'bottom',
               opacity: 0,
               mobile: false
           });

           delaySponsors++
       });

       const peopleBehind = $('.person_behind');
       let delayBehind = 5;

       $(peopleBehind).each(function () {
           ScrollReveal().reveal(this, {
               delay: delayBehind * 100,
               distance: '50%',
               origin: 'bottom',
               opacity: 0,
               mobile: false
           });

           delayBehind++
       });
   });
});