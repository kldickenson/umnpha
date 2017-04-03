
/* JavaScript for Compro theme */

(function ($, Drupal) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {

      var $menu = $('#block-mainmenu');
      var $search_icon = $('#block-searchicon');
      var $email_signup = $('#block-emailsignup');


      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });

      //Mobile Menu
      $menu.on('click', function(e){
        console.log('click is working woohoo');
        $(this).find('ul.menu').toggleClass('is-open');
        $(this).find('ul.menu > li').toggle();
        $search_icon.toggle()
        $email_signup.toggle()

      })

      //Just a stoopid test

      $('.region-header').on('click', function(){
        console.log('working?')
      })

    }
  };
})(jQuery, Drupal);
