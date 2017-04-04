
/* JavaScript for Compro theme */

(function ($, Drupal) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {

      var $menu = $('#block-mainmenu');
      var $search_icon = $('#block-searchicon');
      var $email_signup = $('#block-emailsignup');
      var $search_field = $('#block-googlecse');


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
          $search_icon.toggleClass('is-shown').addClass('animated' +
            ' slideInDown');
          $email_signup.toggle().addClass('animated' +
            ' slideInDown');
          $search_field.toggle().addClass('animated' +
            ' slideInDown');
        })
      }

      //Search field
      if($(window).width() >= 788) {
        $search_icon.on('click', function(e){
          $(this).addClass('is-open');
          $(this).siblings('.block-google-cse').toggleClass('is-open');
        })
      }

      //Sponsors Scroll
      $(window).scroll(function(){

        var scrollTop = $(document).scrollTop();
        var viewportHeight = $(window).height();
        var elPosition = $('.section-type-sponsors').position().top;
        var elHeight = $('.section-type-sponsors').outerHeight();
        var $sponsors = $('.section-type-sponsors');
        console.log("element position", elPosition);
        console.log("viewport", scrollTop + viewportHeight);

        if((elPosition) <= (scrollTop + viewportHeight + 80)) {  //maybe
          // want to add elPosition + elHeight here?
          $sponsors.addClass('animated slideInRight');
        }
      })

    }
  };
})(jQuery, Drupal);
