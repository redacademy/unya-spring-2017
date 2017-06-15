(function($) {
  $(function () {
    $('.menu-toggle').on('click', function(event) {
      event.preventDefault();
      $('.site-header').toggleClass('expanded');
    })
  });
})(jQuery);