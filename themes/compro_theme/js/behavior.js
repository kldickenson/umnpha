
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
      var animationMenu = "animated slideInDown";
      var animationEnd = 'webkitTransitionEnd otransitionend' +
        ' oTransitionEnd msTransitionEnd transitionend';

      // Resizing Event
      var resizeTimer;

      $(window).on('resize', function(e) {

        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {

          if($(window).width() <= 920) {
            $body.removeClass('desktop-layout');
            $body.addClass('mobile-layout');
          } else if($(window).width() >= 920) {
            $body.removeClass('mobile-layout');
            $body.addClass('desktop-layout');
          }

        }, 250);
      });

      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });

      // Search field desktop
      var $search_icon = $('#block-searchicon');

      $search_icon.on('click', function (e) {
        $(this).addClass('is-open');
        $(this).siblings('.block-google-cse').toggleClass('is-open');
        $('#edit-query').focus();
      });

      // Animate page title on page load
      if ($body.hasClass('node--type-page')) {
        $('.field-group-page-hero .field--name-field-title').addClass('animated fadeIn');
      }

      /* PARALLAX CODE MISSING - This code is maybe still necessary, parallax plugin cannot recalculate adjusted
      header height. Looking into plugin that will do this.
      TODO: See if I can fix the parallax issue modifying this pen http://www.minimit.com/demos/parallax-backgrounds-with-centered-content
       */

      // Show Menu on Mobile
      var $mobileNav = $('.region-nav');
      var $hamburger = $('.hamburger');

      $hamburger.on('click', function(e) {
        $(this).toggleClass('nav-open');
        $mobileNav.toggleClass('nav-open').addClass(animationMenu).one(animationEnd,
          function(e) {
            $(this).removeClass(animationMenu);
          }
        );
        $mobileNav.find('.menu--menu-main-menu').toggleClass('nav-open');
        $body.toggleClass('nav-open');
        $mobileNav.find('#block-googlecse').toggleClass('.is-open');
      });

      // Close/Open Dropdown Mobile
      if($(window).width() <= 950) {

        // Open Dropdown
        $mobileNav.find('.menu--menu-main-menu.block-menu li.menu-item--expanded > a').on('click', function (e) {
          if(!($(this).parent().hasClass('child-open'))) {
            e.preventDefault();
            $mobileNav.addClass('child-open');
            $(this).parent().addClass('child-open');
            $mobileNav.find('.menu--menu-main-menu').addClass('child-open');
          }
        });

        // Close Dropdown
        $mobileNav.find('.menu--menu-main-menu.block-menu .menu > span.toggle').on('click', function (e) {
          $mobileNav.find('li.menu-item--expanded.child-open').removeClass('child-open');
          $mobileNav.removeClass('child-open');
          $mobileNav.find('.menu--menu-main-menu').removeClass('child-open');
        });
      }

      // Move items for mobile menu
      if($(window).width() <= 950) {
        var $email = $('.block-email-sign-up');
        var $search = $('.block-google-cse');

        $mobileNav.append($email);
        $mobileNav.append($search);
      }

      // Scroll Triggered Events
      //   Slide ins when in viewport
      /* FIXME: Give each one of these elements a class in the UI or by default in its config, target that class and run the necessary functions on each element in that class*/
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
            // if want to animate once entire height of div is in window get .outerHeight()

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
            // to animate once entire height of div is in window get .outerHeight()

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
            $('.layout-content').css('padding-top', '85px');
            // $('.parallax-mirror').css('top', '85px');
          }
        });

        // Sticky Side bar
        if($(window).width() > 660 && $('.group-sidebar')[0]) {
          $(window).scroll(function(e) {
            $('.group-sidebar').stick_in_parent({offset_top: 100});
          });
        }
    }
  };
})(jQuery, Drupal);
