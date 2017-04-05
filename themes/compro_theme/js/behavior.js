
/* JavaScript for Compro theme */

(function ($, Drupal) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {

      // Give external links target="_blank"
      var $a = $('a');
      $a.each(function(i) {
        if (this.href.length && this.hostname !== window.location.hostname) {
          $(this).attr('target','_blank');
        }
      });

      var $menu = $('#block-mainmenu');
      var $header = $('.region-header > .inner')
      var $hamburger = $('.hamburger');
      var $search_icon = $('#block-searchicon');
      var $email_signup = $('#block-emailsignup');
      var $search_field = $('#block-googlecse');
      var $body = $('body');


      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });


      //Mobile Menu
      if($(window).width() <= 950) {

        $hamburger.on('click', function(e) {
          console.log('click working');
          $header.toggleClass('is-open').addClass('animated' +
            ' slideInDown');
          $header.find('.menu >' +
            ' li,.menu--menu-main-menu,#block-searchicon,#block-emailsignup,#block-googlecse,.block-system-branding-block,.hamburger').toggleClass('is-open');
          // $search_icon.toggleClass('is-shown');
          // $email_signup.toggle();
          // $search_field.toggle().addClass('is-open');
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

      if ($('.section-type-testimonial')[0]){
        $(window).scroll(function() {
          var $scrollTop = $(document).scrollTop();
          var $viewportHeight = $(window).height();

          var $testimonial = $('.section-type-testimonial');
          var $testimonialPosition = $testimonial.position().top;
          var $testimonialHeight = $testimonial.outerHeight();

          console.log("testimonial position", $testimonialPosition);
          console.log("viewport", $scrollTop + $viewportHeight);

          if ($testimonialPosition <= ($scrollTop + $viewportHeight + 80)) {
            $testimonial.addClass('animated slideInRight');
          };
        });
      };



      //About Page Title
      if ($body.hasClass('node--type-page')) {
        $('.field-group-page-hero .field--name-field-title').addClass('animated fadeInDown')
      };

      //Sticky Nav

    }
  };
})(jQuery, Drupal);
