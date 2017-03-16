
/* JavaScript for Compro theme */

(function ($) {
  Drupal.behaviors.comproTheme = {
    attach: function (context, settings) {
      // Sliding panel
      $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
        $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
        e.preventDefault();
      });
    }
  };

})(jQuery);
