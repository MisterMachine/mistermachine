var App = function(){

  /* private */
  /* end private */

  return {

    init: function() {
      App.add_parallax_events();
    },

    add_parallax_events: function(){
      // Cache the Window object
      $window = $(window);
      $('figure[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
        $(window).scroll(function() {
          // Scroll the background at var speed
          // the yPos is a negative value because we're scrolling it UP!
          var yPos = -($window.scrollTop() / $bgobj.data('speed'));
          // Put together our final background position
          var coords = '50% '+ yPos + 'px';
          // Move the background
          $bgobj.css({ backgroundPosition: coords });
        }); // window scroll Ends
      });
    },

  };
}();

$(document).ready(function($j){
  App.init();
});