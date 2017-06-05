
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

      // Global variables
      var $body = $('body');
      var $mobileNav = $('.region-nav');
      var $hamburger = $('.hamburger');
      var $search_icon = $('#block-searchicon');


      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });

      // Search field desktop
      $search_icon.on('click', function (e) {
        $(this).addClass('is-open');
        $(this).siblings('.block-google-cse').toggleClass('is-open');
        $('#edit-query').focus();
      });

      // Wrap sibling elements for node report sidebar layout
      $(".group-report-content").next(".group-sidebar").andSelf().wrapAll("<div class='node--type-report-container' />");


      // Hero images
      // Animate page title on page load
      if ($body.hasClass('node--type-page')) {
        $('.field-group-page-hero .field--name-field-title').addClass('animated fadeIn');
      }

      //Parallax on hero images
      if ($body.hasClass('node--type-page')) {
        var imageUrl = $body.find('.field-group-page-hero >' +
          ' .field--name-field-page-hero > img').prop('src');
        $('.field-group-page-hero .field--name-field-page-hero img').parallax({imageSrc: imageUrl, position: '0 -800%'});
      }
      if ($body.hasClass('node--type-report')) {
        var imageUrl = $body.find('.field-group-page-hero >' +
          ' .field--name-field-page-hero > img').prop('src');
        $('.field-group-page-hero .field--name-field-page-hero img').parallax({imageSrc: imageUrl, position: '0 -800%'});
      }

      // Mobile only
        //Mobile Menu
        if($(window).width() <= 950) {

          var animationMenu = "animated slideInDown";
          var animationEnd = 'webkitTransitionEnd otransitionend' +
            ' oTransitionEnd msTransitionEnd transitionend';

          // Show menu
          $hamburger.on('click', function(e) {
            $(this).toggleClass('is-open');
            $mobileNav.toggleClass('is-open').addClass(animationMenu).one(animationEnd,
                  function(e) {
                $(this).removeClass(animationMenu);
              }
            );
          });

          // Add class for dropdown
          $mobileNav.find('.menu--menu-main-menu.block-menu li.menu-item--expanded > a').on('click', function (e) {
            e.preventDefault();
            $mobileNav.toggleClass('child-open');
          });
        }

        // Move items for mobile menu
        if($(window).width() <= 950) {
          var $email = $('.block-email-sign-up');
          var $search = $('.block-google-cse');
          // var $menu = $('.menu--menu-main-menu');

          $mobileNav.append($email);
          $mobileNav.append($search);
        }

        // Move learn more to teaser group
        $('.group-report-teaser-text').append($('.learn-more'));

      // Scroll Triggered Events
        // Slide ins when in viewport   --> THIS SECTION NEEDS MEGA RE-FACTOR TO DO THESE THINGS DYNAMICALLY,
        $(window).scroll(function(e) {

          //get viewport size, set top of page
          var $scrollTop = $(document).scrollTop();
          var $viewportHeight = $(window).height();

          // Sponsors Section Animation
          if ($('.section-type-sponsors')[0]) {
            var $sponsors = $('.section-type-sponsors');
            var $sponsorPrimaryLabelPos = $sponsors.find('.field--name-field-sponsors-primary__label').position().top;
            var $sponsorSecondaryLabelPos = $sponsors.find('.field--name-field-sponsors-secondary-label').position().top;
            var $sponsorPrimaryImagePos = $sponsors.find('.field--name-field-sponsors-primary-sponsors').position().top;
            var $sponsorFirstSecondaryImagePos = $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':first').position().top;
            var $sponsorSecondSecondaryImagePos = $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':nth-child(2)').position().top;
            var $sponsorHeight = $sponsors.outerHeight();

            //Animate on viewport entry --> REFACTOR INTO LOOP!
            if(($sponsorPrimaryLabelPos) <= ($scrollTop + $viewportHeight + 80)) {
              $sponsors.find('.field--name-field-sponsors-primary__label').addClass('animated slideInRight');
            }
            if(($sponsorSecondaryLabelPos) <= ($scrollTop + $viewportHeight + 80)) {
              $sponsors.find('.field--name-field-sponsors-secondary-label').addClass('animated slideInRight');
            }
            if(($sponsorPrimaryImagePos) <= ($scrollTop + $viewportHeight + 80)) {
              $sponsors.find('.field--name-field-sponsors-primary-sponsors').addClass('animated slideInRight');
            }
            if(($sponsorFirstSecondaryImagePos) <= ($scrollTop + $viewportHeight + 80)) {
              $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':first').addClass('animated slideInRight');
            }
            if(($sponsorSecondSecondaryImagePos) <= ($scrollTop + $viewportHeight + 80)) {
              $sponsors.find('.field--name-field-sponsors-secondary-sponsor').filter(':nth-child(2)').addClass('animated slideInRight');
            }
          }

          // Testimonial Section animation
          if ($('.section-type-testimonial')[0]){
            var $testimonial = $('.section-type-testimonial');
            var $testimonialPosition = $testimonial.position().top;
            var $testimonialHeight = $testimonial.outerHeight();

            // Animate when section-type enters viewport
            if ($testimonialPosition <= ($scrollTop + $viewportHeight + 80)) {
              $testimonial.find('.testimonial-image').addClass('animated ' +
                'slideInRight');
              $testimonial.find('.field--name-field-testimonial-quote').addClass('animated ' +
                'slideInRight').delay(1000);
              $testimonial.find('.field--name-field-testimonial-author').addClass('animated ' +
                'slideInRight').delay(1500);
              $testimonial.find('.field--name-field-testimonial-credentials').addClass('animated ' +
                'slideInRight').delay(2000);
            }
          }
        });

        // Sticky Nav
        $(window).scroll(function(e) {
          var position = $(window).scrollTop();
          // Fix Header
          if (position > 0) {
            $('header,.region-header,.region-nav').addClass('header-fixed' +
              ' animated' +
              ' slideInDown');
            $('.layout-content').css('padding-top', '84px');
            $('.parallax-mirror').css('top', '84px');
          }
        });

        // Sticky Side bar
        if($(window).width() >= 660 && $('.group-sidebar')[0]) {
          $(window).scroll(function(e) {
            $('.group-sidebar').stick_in_parent({offset_top: 100});
          });
        }
    }
  };
})(jQuery, Drupal);
