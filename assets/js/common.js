// spNav
jQuery(document).ready(function($){
  $('.spNav__top__button').on('click', function(){
    $(this).toggleClass('active');
    $('.spNav__top__hamburger').toggleClass('active');
    $('.navContent').toggleClass('active');
  });
});