(function($) {
  $(function () {

    var $btn = $('.sign-up-btn');
    var $subscribeArea = $('.subscription-form');
    var $form = $('.wpcf7-submit');

    // displays form when sign up button clicked
    $btn.on('click', function(event) {
      event.preventDefault();
      $btn.css('display', 'none');
      $('.newsletter-sign-up').css('position', 'absolute');
      $subscribeArea.removeClass('hidden-mobile').addClass('display-form');
      $('.close-form').prepend('<i class="fa fa-times" aria-hidden="true"></i>');
    });

    // hides form when close button is clicked
    $('.close-form').on('click', function() {
      $btn.css('display', 'initial');
      $('.newsletter-sign-up').css('position', 'static');
      $subscribeArea.removeClass('display-form').addClass('hidden-mobile');
      $('.close-form').empty();
      $form.prop('value', 'sign up');
    });

    // changes button message on submit if successful
    $form.on('click', function() {
      $form.prop('value', 'signed up');
    });

  });
})(jQuery);