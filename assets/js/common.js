// spNav
jQuery(document).ready(function($){
  $('.spNav__top__button').on('click', function(){
    const isActive = $('.navContent').hasClass('active');

    $(this).toggleClass('active');
    $('.spNav__top__hamburger').toggleClass('active');
    $('.navContent').toggleClass('active');

    if (!isActive) {
      $('body').addClass('no-scroll');
      $('html').addClass('no-scroll');
    } else {
      $('body').removeClass('no-scroll');
      $('html').removeClass('no-scroll');
    }
  });
});
