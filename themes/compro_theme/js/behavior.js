
/* JavaScript for Compro theme */

(function ($, Drupal) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {


      var $menu = $('#block-mainmenu');
      var $search_icon = $('#block-searchicon');
      var $email_signup = $('#block-emailsignup');
      var $search_field = $('#block-googlecse');
      var $page


      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });


      //Mobile Menu
      if($(window).width() <= 788) {

        $menu.on('click', function(e) {
          $(this).find('ul.menu').toggleClass('is-open').addClass('animated' +
            ' slideInDown');
          $(this).find('ul.menu > li').toggle();
          $search_icon.toggleClass('is-shown');
          $email_signup.toggle();
          $search_field.toggle().addClass('is-open');
        })
      }


      //Search field
      if($(window).width() >= 788) {
        $search_icon.on('click', function(e){
          $(this).addClass('is-open');
          $(this).siblings('.block-google-cse').toggleClass('is-open');
        })
      }


      //Scroll Triggered Slide-Ins
      $(window).scroll(function(){

        var $scrollTop = $(document).scrollTop();
        var $viewportHeight = $(window).height();

        var $sponsors = $('.section-type-sponsors');
        var $sponsorPosition = $sponsors.position().top;
        var $sponsorHeight = $sponsors.outerHeight();

        console.log("sponsor position", $sponsorPosition);
        console.log("viewport", $scrollTop + $viewportHeight);

        if(($sponsorPosition) <= ($scrollTop + $viewportHeight + 80)) {
          $sponsors.addClass('animated slideInRight');
        };
      });

      if ($(document).hasClass('section-type-testimonial')){
        $(window).scroll(function() {
          var $scrollTop = $(document).scrollTop();
          var $viewportHeight = $(window).height();

          var $testimonial = $('.section-type-testimonial');
          var $testimonialPosition = $testimonial.position().top;
          var $testimonialHeight = $testimonial.outerHeight();

          console.log("testimonial position", $testimonialPosition);
          console.log("viewport", $scrollTop + $viewportHeight);
          console.log("dooodeeedaa");

          if ($testimonialPosition <= ($scrollTop + $viewportHeight + 80)) {
            $testimonial.addClass('animated slideInRight');
          };
        });
      };



      //About Page Title
      var $page = $('.node--type-page');

      if ($(document).hasClass('node--type-page')) {
        $page.find('.field-group-page-hero .field--name-field-title').addClass('animated fadeIn')
      };

    }
  };
})(jQuery, Drupal);
