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
// jQuery('.featurePc__content__left').slick({
//   fade: true,
//     speed: 800,
//     autoplaySpeed: 5000,
//     arrows: false,
//     autoplay: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     infinite: true
// });

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
  // すべてのタイトルを初期化
  $('.featurePc__content__titleCover').removeClass('active');
  
  // 現在のスライドに対応するタイトルにクラスを追加
  $('.featurePc__content__titleCover').eq(currentSlide).addClass('active');
});







});
