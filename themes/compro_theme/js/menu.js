(function ($, Drupal) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {

    var $body = $('body');
    var $mobileNav = $('.region-nav');
    var $hamburger = $('.hamburger');

    var animationMenu = "animated slideInDown";
    var animationEnd = 'webkitTransitionEnd otransitionend' +
      ' oTransitionEnd msTransitionEnd transitionend';

    // Open/Close Mobile Menu - hamburger icon
    $hamburger.on('click', function(e) {
      console.log('nav-open clicked');
      $(this).toggleClass('nav-open');
      $body.toggleClass('nav-open');
      $mobileNav.toggleClass('nav-open').addClass(animationMenu).one(animationEnd,
        function(e) {
          $(this).removeClass(animationMenu);
        }
      );
    });

    // Close menu on clicks outside of menu /*TODO: close menu on clicks outside of menu*/

    
    // Close/Open Dropdown
    if($(window).width() <= 950) {

    
      // Add class for dropdown
      $mobileNav.find('.menu--menu-main-menu.block-menu > .menu > li.menu-item--expanded > ul').on('click', function (e) {
        if(!($(this).parents('li').hasClass('child-open'))) {
          console.log('child clicked');
          e.preventDefault();
          $mobileNav.addClass('child-open');
          $body.addClass('child-open')
          $mobileNav.find('.menu--menu-main-menu.block-menu li.menu-item--expanded').addClass('child-open');
        }
      });
    
      // Close Dropdown
      $mobileNav.find('.menu--menu-main-menu.block-menu .menu > span.toggle').on('click', function (e) {
        $mobileNav.find('.menu--menu-main-menu.block-menu li.menu-item--expanded.child-open').removeClass('child-open');
        $mobileNav.removeClass('child-open');
        $body.removeClass('child-open');
      });
    }

    }
  };
})(jQuery, Drupal);