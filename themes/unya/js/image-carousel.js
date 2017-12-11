(function($) {
$('.image-carousel').slick({
  arrows: true,
  dots: true,
  autoplay: true,
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
  autoplay: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  adaptiveHeight: true,
  
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      }
    }
  ]
});

$(document).ready(function() {
  if ($(window).width() < 540) {
    $('.top-news-carousel-wrapper').slick({
      infinite: true,
      arrows: false,
      dots: true,
      autoplay: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  } else {
    return null;
  }
});

$(window).resize(function() {
  if ($(window).width() < 540) {
    $('.top-news-carousel-wrapper').slick({
      infinite: true,
      arrows: false,
      dots: true,
      autoplay: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  } else {
    $('.top-news-carousel-wrapper').removeClass('slick-slider');
  }
})


})(jQuery);