(function($) {
  $(function () {

    var $btn = $('.sign-up-btn');
    var $form = $('.subscription-form');
    // var $closeBtn = $('.close-form');

    $btn.on('click', function(event) {
      event.preventDefault();
      $btn.css('display', 'none');
      $('.newsletter-sign-up').css('position', 'absolute');
      $form.removeClass('hidden-mobile').addClass('display-form');
      $('.close-form').prepend('<i class="fa fa-times" aria-hidden="true"></i>');
    });

    $('.close-form').on('click', function() {
      $btn.css('display', 'initial');
      $('.newsletter-sign-up').css('position', 'static');
      $form.removeClass('display-form').addClass('hidden-mobile');
      $('.close-form').empty();
    });

  });
})(jQuery);