jQuery(document).ready(function($){

  // featureSp
jQuery('.featureSp__top__container').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: false,
  cssEase: 'ease-in-out',
  centerMode: true,
  centerPadding: "10%",
  speed: 1000,
  swipeToSlide: true
});

jQuery('.featureSp__bottom').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: false,
  cssEase: 'ease-in-out',
  speed: 1000,
  swipeToSlide: true
});
// featurePc
jQuery('.featurePc__content__right').slick({
  fade: true,
    speed: 800,
    autoplaySpeed: 5000,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true
});

$('.featurePc__content__right').on('afterChange', function(event, slick, currentSlide) {
  $('.featurePc__content__titleCover').removeClass('active');
  $('.featurePc__content__titleCover').eq(currentSlide).addClass('active');
});

//accordion
  jQuery('.faq__accordion').click(function() {
    jQuery('.faq__accordion__a').slideUp();
    jQuery('.faq__accordion__q p').css('transform', 'rotate(0deg)');

    if (!jQuery(this).find('.faq__accordion__a').is(':visible')) {
      jQuery(this).find('.faq__accordion__a').slideDown();
      jQuery(this).find('.faq__accordion__q p').css('transform', 'rotate(180deg)');
    }
  });
});