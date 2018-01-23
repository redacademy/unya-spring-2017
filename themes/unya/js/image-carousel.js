(function($) {
$('.image-carousel').slick({
  arrows: true,
  dots: false,
  text:false,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear'
}),


$('.front-carousel').slick({
  infinite: true,
  arrows: false,
  dots:false,
  autoplay: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
});

$(document).ready(function() {
  if ($(window).width() < 540) {
    $('.top-news-carousel-wrapper').slick({
      infinite: true,
      arrows: true,
      dots: true,
      autoplay: false,
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
      arrows: true,
      dots: true,
      autoplay: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  } else {
    $('.top-news-carousel-wrapper').removeClass('slick-slider');
  }
})


})(jQuery);