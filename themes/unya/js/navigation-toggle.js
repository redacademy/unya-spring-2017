(function($) {
  $(function () {
    if (window.innerWidth <= 600) {
      $('#accordion').accordion();
    } 
    $(window).resize(function() {
      if (window.innerWidth > 600) {
        $('#accordion').accordion('destroy');
      } else if (window.innerWidth <= 600) {
        $('#accordion').accordion();

      }
    });
    $('.menu-toggle').on('click', function(event) {
      event.preventDefault();
      $('.site-header').toggleClass('expanded');
    })
  });
})(jQuery);