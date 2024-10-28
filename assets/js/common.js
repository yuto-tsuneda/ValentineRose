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



  //scrollTop

    $('.footerNav__goTop__scroll').click(function(event){
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });
});

