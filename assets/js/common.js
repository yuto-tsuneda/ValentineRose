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

// feature
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
});
