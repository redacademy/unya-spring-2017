(function($) {
  $(function () {
    if (window.innerWidth <= 800) {
      $('#accordion').accordion({
        heightStyle: 'content',
        icons: { 'header': 'ui-icon-triangle-1-s', 'activeHeader': 'ui-icon-triangle-1-n' }
    });
    } 
    $(window).resize(function() {
      if (window.innerWidth > 800) {
        if ($('#accordion').hasClass('ui-accordion')) {
          $('#accordion').accordion('destroy');
        }
      } else if (window.innerWidth < 800) {
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
    
    $('.menu-gradient').hide();
    if (window.innerWidth <= 800) {
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

     // sidebar positioning on scroll
    var $bottomOfHeader = $('.sidebar-start').offset().top + $('.sidebar-start').height();
    var $sidebarMenu = $('#secondary .menu-primary-menu-container');
    var $sidebarArea = $('.sidebar-nav-menu');
    var $menuItem = $('.sidebar-menu-container .menu-item a');
    var $menuHeight = $sidebarMenu.height() + $('.site-header').height();

    $sidebarMenu.css('top', $bottomOfHeader);

    //on window resize moves sidebar
    $(window).resize(function() {
      $bottomOfHeader = $('.sidebar-start').offset().top + $('.sidebar-start').height();
      $sidebarMenu.removeAttr('style').css('top', $bottomOfHeader);
    });

    function fixSidebar(position) {
      $bottomOfHeader = $('.sidebar-start').offset().top + $('.sidebar-start').height();
      if ( position > $bottomOfHeader && position + $menuHeight < $('.sidebar-stop').offset().top ) {
        $sidebarMenu.css('position', 'fixed');
        $sidebarMenu.css('top', $('.site-header').height());
      } else if ( $menuHeight + position > $('.sidebar-stop').offset().top ) {
        $sidebarMenu.css('position', 'absolute');
      } else {
        $sidebarMenu.css('position', 'absolute');
        $sidebarMenu.css('top', $bottomOfHeader);
      }
    }

    $(document).scroll(function() {
      var $position = $(this).scrollTop();
      if ($sidebarArea.length) {
        fixSidebar($position);
      }
    });

    // Smooth scrolling to anchors on the page
      $menuItem.on('click', function(event) {
      event.preventDefault();

        var $menuLink = $(this.hash);
        $menuItem = $menuLink.length ? $menuLink : $('[name=' + this.hash.slice(1) +']');
        if ($menuItem.length) {
          $('html, body').animate({
            scrollTop: $menuLink.offset().top
          }, 500);
          return false;
        }

      });


  });
    
    

})(jQuery);