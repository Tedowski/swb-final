$(document).ready(function() {
   $('.body').css('overflow', 'hidden');
   $('.wrapper, .header, .footer').hide();

   $(window).on('load', function() {
       $('.body').css('overflow', 'auto');
       $('.loader').fadeOut(500);
       $('.wrapper, .header, .footer').fadeIn(1000);

       //trigger animation on reveal events here
   });
});