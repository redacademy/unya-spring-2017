(function($) {
  $(function () {

    // sidebar positioning
    var $bottomOfHeader = $('.header-wrapper').offset().top + $('.header-wrapper').height();
    var $sidebarMenu = $('#secondary .menu-primary-menu-container');
    var $sidebarArea = $('.sidebar-nav-menu');
    

    $sidebarMenu.css('top', $bottomOfHeader);

    function fixSidebar(position) {
      if (position > $bottomOfHeader) {
        $sidebarMenu.css('position', 'fixed');
        $sidebarMenu.css('top', '0');
      } else {
        $sidebarMenu.css('position', 'absolute');
        $sidebarMenu.css('top', $bottomOfHeader);
      }
    }

    $(document).scroll(function() {
      var $position = $(this).scrollTop();
      console.log($position);

      if ($sidebarArea.length) {
        fixSidebar($position);
      }

    });

  });

})(jQuery);