
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


      var $body = $('body');
      var $header = $('.region-header > .inner')
      var $hamburger = $('.hamburger');
      var $search_icon = $('#block-searchicon');


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
            ' li,.menu--menu-main-menu,#block-emailsignup,.block-system-branding-block,.hamburger').toggleClass('is-open');
        })
      }


      //Scroll Triggered Slide-Ins
      $(window).scroll(function() {

        //get viewport size, set top of page to variable
        var $scrollTop = $(document).scrollTop();
        var $viewportHeight = $(window).height();
        var $sponsors = $('.section-type-sponsors');


      ////add animate classes
        // if ($($sponsors)[0]) {
        //   $sponsors.find('.field--name-field-sponsors-primary__label,.field--name-field-sponsors-secondary-label,.component-sponsor').addClass('animate-on-view');
        // }
        //
        // //get positions of all elements that will be animated on viewport entry
        // var $elements = $('.animate-on-view');
        // var $elPositions = [];
        //
        // $.each($elements, function (index, element) {
        //   var elPosition = $(element).position();
        //
        //   $elPositions.push(elPosition);
        //   console.log(index + ": " + elPosition + "  top: " + elPosition.top)
        // })
        //   console.log('elements: ', $elements);
        //   console.log('elPositions properties:  ' + Object.entries($elPositions));


        var $sponsorPrimaryLabelPos = $sponsors.find('.field--name-field-sponsors-primary__label').position().top;
        var $sponsorSecondaryLabelPos = $sponsors.find('.field--name-field-sponsors-secondary-label').position().top;
        var $sponsorPrimaryImagePos = $sponsors.find('.field--name-field-sponsors-primary-sponsors').position().top;
        var $sponsorFirstSecondaryImagePos = $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':first').position().top;
        var $sponsorSecondSecondaryImagePos = $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':nth-child(2)').position().top;
        var $sponsorHeight = $sponsors.outerHeight();

        //Animate when relevant div enters viewport
        if(($sponsorPrimaryLabelPos) <= ($scrollTop + $viewportHeight + 80)) {
          $sponsors.find('.field--name-field-sponsors-primary__label').addClass('animated slideInRight');
        };

        if(($sponsorSecondaryLabelPos) <= ($scrollTop + $viewportHeight + 80)) {
          $sponsors.find('.field--name-field-sponsors-secondary-label').addClass('animated slideInRight');
        };

        if(($sponsorPrimaryImagePos) <= ($scrollTop + $viewportHeight + 80)) {
          $sponsors.find('.field--name-field-sponsors-primary-sponsors').addClass('animated slideInRight');
        };

        if(($sponsorFirstSecondaryImagePos) <= ($scrollTop + $viewportHeight + 80)) {
          $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':first').addClass('animated slideInRight');
        };

        if(($sponsorSecondSecondaryImagePos) <= ($scrollTop + $viewportHeight + 80)) {
          $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':nth-child(2)').addClass('animated slideInRight');
        };


        if ($('.section-type-testimonial')[0]){
          var $testimonial = $('.section-type-testimonial');
          var $testimonialPosition = $testimonial.position().top;
          var $testimonialHeight = $testimonial.outerHeight();

          //Animate when section-type enters viewport
          if ($testimonialPosition <= ($scrollTop + $viewportHeight + 80)) {
            $testimonial.find('.testimonial-image').addClass('animated ' +
              'slideInRight')
            $testimonial.find('.field--name-field-testimonial-quote').addClass('animated ' +
              'slideInRight').delay(100);
            $testimonial.find('.field--name-field-testimonial-author').addClass('animated ' +
              'slideInRight').delay(1500);
            $testimonial.find('.field--name-field-testimonial-credentials').addClass('animated ' +
              'slideInRight').delay(2000);
          };
          // if ($testimonialPosition <= ($scrollTop + $viewportHeight + 80)) {
          //   $testimonial.find('.testimonial-image').addClass('animated' +
          //     ' slideInRight').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
          //     function(e) {
          //
          //       $testimonial.find('.field--name-field-testimonial-quote').addClass('animated slideInRight').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
          //         function(e) {
          //
          //           $testimonial.find('.field--name-field-testimonial-author').addClass('animated slideInRight').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
          //             function(e) {
          //
          //               $testimonial.find('.field--name-field-testimonial-credentials').addClass('animated slideInRight');
          //
          //             });
          //         });
          //     });
          // };
        };
      });


      //About Page Title
      if ($body.hasClass('node--type-page')) {
        $('.field-group-page-hero .field--name-field-title').addClass('animated fadeInDown')
      };


      //Sticky Nav
      $(window).scroll(function() {
        var position = $(window).scrollTop();

        // Header fix.
        if (position > 0) {
          $('.region-header').addClass('header-fixed animated slideInDown');
          $('.layout-content').css('padding-top', '70px');
        }
      });
    }
  };
})(jQuery, Drupal);
