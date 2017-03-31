
/* JavaScript for Compro theme */

(function ($, Drupal) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {

      var $menu = $('#block-mainmenu > ul.menu::before');
      var $search_icon = $('#block-searchicon');
      var $email_signup = $('#block-emailsignup');


      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });

      //Mobile Menu
      $menu.on('click', function(e){
        console.log('click is working gaddamit');
        $.show($search_icon, $email_signup);
      })

      //Just a stoopid test

      $('.region-header').on('click', function(){
        console.log('working?')
      })

      console.log("well i don't think this file is being loaded in anywhere" +
        " at all so once i get that fixed this text should show up on page load")
    }
  };
})(jQuery, Drupal);
