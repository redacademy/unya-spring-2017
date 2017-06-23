(function($) {
  $(function () {

    // sidebar positioning on scroll
    var $bottomOfHeader = $('.sidebar-start').offset().top + $('.sidebar-start').height();
    var $sidebarMenu = $('#secondary .menu-primary-menu-container');
    var $sidebarArea = $('.sidebar-nav-menu');
    var $menuItem = $('.sidebar-menu-container .menu-item a');
    // var $siteHeader = $('.sidebar-start-nyc').offset().top + $('.sidebar-start-nyc').height();

    $sidebarMenu.css('top', $bottomOfHeader);
    // $sidebarMenu.css('top', $siteHeader);

    //on window resize moves sidebar
    $(window).resize(function() {
      $bottomOfHeader = $('.sidebar-start').offset().top + $('.sidebar-start').height();
      $sidebarMenu.removeAttr('style').css('top', $bottomOfHeader);
    });

    function fixSidebar(position) {
      $bottomOfHeader = $('.sidebar-start').offset().top + $('.sidebar-start').height();
      if (position > $bottomOfHeader) {
        $sidebarMenu.css('position', 'fixed');
        $sidebarMenu.css('top', '0');
      } else {
        $sidebarMenu.css('position', 'absolute');
        $sidebarMenu.css('top', $bottomOfHeader);
      }
      // if (position > $siteHeader) {
      //   $sidebarMenu.css('position', 'fixed');
      //   $sidebarMenu.css('top', '0');
      // } else {
      //   $sidebarMenu.css('position', 'absolute');
      //   $sidebarMenu.css('top', $siteHeader);
      // }
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