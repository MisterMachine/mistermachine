var MRM = (function() {

  var $ = jQuery;

  return {

    init: function() {
      this.setPageScrollEvents();
    },

    setPageScrollEvents: function() {
      // Add click event with animated scroll
      $('.menu-items a').on('click', function(e){
        e.preventDefault();

        var speed = 500,
          idLink = $(this).attr('href'),
          loc = $(idLink).offset().top;

        $('body').animate( { scrollTop: loc }, speed );
      });
    }

  };
} () );

jQuery(document).ready(function() {
  MRM.init();
});