


$(document).ready(function () {

  // Affichag menu mobile

  $('#btnMenu').click(function(){
    if ($('.wrap-nav').hasClass('open')){
$('.wrap-nav').removeClass('open');
    }else{
$('.wrap-nav').addClass('open');
}
  });


        /* Changement d'état du menu au scroll */
        var $header = $('.top-header'),
          scrollClass = 'fixed',
          activateAtY = 20;

        function deactivateHeader() {
          if (!$header.hasClass(scrollClass)) {
            $header.addClass(scrollClass);
          }
        }

        function activateHeader() {
          if ($header.hasClass(scrollClass)) {
            $header.removeClass(scrollClass);
          }
        }

        $(window).scroll(function () {
          if ($(window).scrollTop() > activateAtY) {
            deactivateHeader();
          } else {
            activateHeader();
          }
        });

// Scroll to element

  $('.accueil').click(function () {
      $('html, body').animate({
        scrollTop: $("#accueil").offset().top
      }, 1000)
    }),
    $('.agence').click(function () {
      $('html, body').animate({
        scrollTop: $("#agence").offset().top
      }, 1000)
    }),
    $('.tarif').click(function () {
      $('html, body').animate({
        scrollTop: $("#tarif").offset().top
      }, 1000)
    })

// Modal Formulaire
$("[data-form]").click( function() {
  $('.masque').show();
  $('body').css('overflow', 'hidden');
});


 $('.close').click(function () {
   $('.masque').hide();
   $('body').css('overflow', 'initial');
   $('body').css('overflow-y', 'scroll');
   $('body').css('overflow-x', 'hidden');

 });
 

});
