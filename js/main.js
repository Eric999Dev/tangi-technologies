


$(document).ready(function () {


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
	
// Slideshow
	
	
	$('.slideShow').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

});
