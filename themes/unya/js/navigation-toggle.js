(function($) {
  $(function () {
    if (window.innerWidth <= 600) {
      $('#accordion').accordion({
        heightStyle: 'content',
        icons: { 'header': 'ui-icon-triangle-1-s', 'activeHeader': 'ui-icon-caret-1-s' }
    });
    } 
    $(window).resize(function() {
      if (window.innerWidth > 600) {
        $('#accordion').accordion('destroy');
      } else if (window.innerWidth <= 600) {
        $('#accordion').accordion({
          heightStyle: 'content',
          icons: { 'header': 'ui-icon-caret-1-s', 'activeHeader': 'ui-icon-caret-1-n' }
        });

      }
    });
    $('.menu-toggle').on('click', function(event) {
      event.preventDefault();
      $('.site-header').toggleClass('expanded');
    })
  });
})(jQuery);