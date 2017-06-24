(function($) {
  $(function () {
    if (window.innerWidth <= 600) {
      $('#accordion').accordion({
        heightStyle: 'content',
        icons: { 'header': 'ui-icon-triangle-1-s', 'activeHeader': 'ui-icon-triangle-1-n' }
    });
    } 
    $(window).resize(function() {
      if (window.innerWidth === 600) {
        $('#accordion').accordion('destroy');
      } else if (window.innerWidth < 600) {
        $('#accordion').accordion({
          heightStyle: 'content',
          icons: { 'header': 'ui-icon-triangle-1-s', 'activeHeader': 'ui-icon-triangle-1-n' }
        });
      }
    });
    $('.menu-toggle').on('click', function(event) {
      event.preventDefault();
      $('.site-header').toggleClass('expanded');
      $('.site-footer').toggleClass('expanded');
      $('.site-content').toggleClass('collapsed');
      $('.site-footer').toggleClass('hidden-mobile');
      })
    });
    $('.menu-gradient').hide();
    if (window.innerWidth <= 600) {
      $('.menu-item-has-children > a').on('click', function(event) {
        event.preventDefault();
        $(this).parent().addClass('expanded');
        $('.menu-gradient').show();
        $(this).blur(function () {
          $(this).parent().removeClass('expanded');
          $('.menu-gradient').hide();
        });

      });
    }
  
    $('.current-menu-item .sub-menu .menu-item a').click(function(event) {
      event.preventDefault();
      $('.site-header').removeClass('expanded');
      $('.site-footer').removeClass('expanded');
      $('.site-content').removeClass('collapsed');
      $('.site-footer').addClass('hidden-mobile');
      var target = $(this.hash);
      target = target.length ? target : $('[id=' + this.hash.slice(1) +']');
      target.click();
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
      
    });
    

})(jQuery);