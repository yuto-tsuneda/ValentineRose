// spNav
jQuery(document).ready(function($){
  jQuery('.spNav__top__button').on('click', function(){
    const isActive = jQuery('.navContent').hasClass('active');

    jQuery(this).toggleClass('active');
    jQuery('.spNav__top__hamburger').toggleClass('active');
    jQuery('.navContent').toggleClass('active');

    if (!isActive) {
      jQuery('body').addClass('no-scroll');
      jQuery('html').addClass('no-scroll');
    } else {
      jQuery('body').removeClass('no-scroll');
      jQuery('html').removeClass('no-scroll');
    }
  });

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

// Bottom slider initialization
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
jQuery('.featurePc__content__left').slick({
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

jQuery('.featurePc__content__left').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  jQuery('.featurePc__content__left .slick-slide').css({
      opacity: 0,
      transform: 'translateX(-20px)'
  });
});

jQuery('.featurePc__content__left').on('afterChange', function(event, slick, currentSlide) {
  jQuery('.featurePc__content__left .slick-current').css({
      opacity: 1,
      transform: 'translateX(0)' 
  });
});

jQuery('.featurePc__content__center').slick({
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

jQuery('.featurePc__content__center').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  jQuery('.featurePc__content__center .slick-slide').css({
      opacity: 0,
      transform: 'translateX(-20px)' 
  });
});

jQuery('.featurePc__content__center').on('afterChange', function(event, slick, currentSlide) {
  jQuery('.featurePc__content__center .slick-current').css({
      opacity: 1,
      transform: 'translateX(0)' 
  });
});

jQuery('.featurePc__content__right').slick({
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

jQuery('.featurePc__content__right').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  jQuery('.featurePc__content__right .slick-slide').css({
      opacity: 0,
      transform: 'translateX(-20px)' 
  });
});

jQuery('.featurePc__content__right').on('afterChange', function(event, slick, currentSlide) {
  jQuery('.featurePc__content__right .slick-current').css({
      opacity: 1,
      transform: 'translateX(0)' 
  });
});







});
