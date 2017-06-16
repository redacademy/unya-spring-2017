(function($) {
  $(function () {

    var $btn = $('.sign-up-btn');

    $btn.on('click', function() {
      $btn.toggleClass('hidden-mobile');
      $('subscription-form').removeClass('hidden-mobile').addClass('display-form');
    });

  });
})(jQuery);