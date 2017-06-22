(function($) {
$('.image-carousel').slick({
  arrows: true,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
   fade: true,
  cssEase: 'linear'
}),


$('.logo-carousel').slick({
  infinite: true,
  dots:true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }
  ]
});
	


})(jQuery);