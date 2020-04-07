(function ($) {
  Drupal.behaviors.themeScripts = {
    attach: function (context, settings) {

      $(".collection__banner").each(function() {
        var attr = $(this).attr('data-image-src');
        $(this).css('background-image', 'url('+attr+')');      
      });

      $(".preloader").delay("500").fadeIn();

      TweenMax.staggerTo(".overlay-white", 1.5, {
        ease: Power2.easeOut,
        delay: 0.5,
        height: "0"          
      }, 0.1); 

      $("#main").imagesLoaded( { background: true }, function() {         
        $(".preloader").fadeOut(); 
        TweenMax.staggerTo(".overlay-grey", 1.5, {
          ease: Power2.easeOut,
          delay: 1.5,
          height: "0"          
        }, 0.1);
      }); 

      $(".swiper-container .view-content").addClass("swiper-wrapper");

      var mySwiper = new Swiper ('.swiper-container', {
        slidesPerView: '5', 
        spaceBetween: 20,       
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          320: {
            slidesPerView: 2
          },
          576: {
            slidesPerView: 3
          },
          1200: {
            slidesPerView: 5
          },
        }
      })

      $(window).scroll(function(){
        if ($(window).scrollTop() >= 94) {
          $("#header").addClass("sticky");          
        }
        else {
          $("#header").removeClass("sticky");
        }
      });      

    }
  };
}(jQuery));