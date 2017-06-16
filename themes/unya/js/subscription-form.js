(function($) {
  $(function () {

    var $btn = $('.sign-up-btn');

    $btn.on('click', function() {
      $('subscription-form').removeClass('hidden-mobile').addClass('display-form');
    });

  });
})(jQuery);