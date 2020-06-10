


$(document).ready(function () {

  // Affichag menu mobile

  $('#btnMenu').click(function(){
    if ($('.wrap-nav').hasClass('open')){
$('.wrap-nav').removeClass('open');
$('.burger').removeClass('open-burger');
    }else{
$('.wrap-nav').addClass('open');
$('.burger').addClass('open-burger');
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
      }, 1000);
      $('.accueil>a').addClass('under');
      $('.agence>a').removeClass('under');
      $('.tarif>a').removeClass('under');
    }),
    $('.agence').click(function () {
      $('html, body').animate({
        scrollTop: $("#agence").offset().top
      }, 1000);
      $('.agence>a').addClass('under');
       $('.accueil>a').removeClass('under');
       $('.tarif>a').removeClass('under');

    }),
    $('.tarif').click(function () {
      $('html, body').animate({
        scrollTop: $("#tarif").offset().top
      }, 1000);
      $('.tarif>a').addClass('under');
        $('.agence>a').removeClass('under');
        $('.accueil>a').removeClass('under');
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

// Slideshow

if ($(window).width() >= 1150){
$('.wrap-prix').unslick();
}
$('.wrap-prix').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [{
      breakpoint: 1150,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },

     {
       breakpoint: 992,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1
       }
     },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

});
