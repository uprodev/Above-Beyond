jQuery(document).ready(function ($) {

  $('.marquee1').marquee({
    duration: 35000,
    gap:0,
    delayBeforeStart: 0,
    direction: 'right',
    duplicated: true,
    loop:true,
    startVisible: true,
  });

  $('.marquee2').marquee({
    duration: 35000,
    gap:0,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    loop:true,
    startVisible: true,
  });

  $('.marquee3').marquee({
    duration: 35000,
    gap:0,
    delayBeforeStart: 0,
    direction: 'right',
    duplicated: true,
    loop:true,
    startVisible: true,
  });

  $('.projects .line').marquee({
    duration: 55000,
    gap:0,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    loop:true,
    startVisible: true,
  });

  //slider
  var swiperTestimonials = new Swiper(".slider-testimonials", {
    spaceBetween: 30,
    pagination: {
      el: ".testimonials-pagination",
      clickable: true,
    },
  });

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  /*animations*/
  AOS.init({
    duration: 800,
    disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  });



  $(window).on('load', function () {
    if($("section").is(".number-block")){
      var textPos = $('.number-block').offset().top;

      $(window).scroll(function() {

        var topOfWindow = $(window).scrollTop();

        if($('.number-block .item').hasClass('stop')){
          return;
        }

        if (textPos < topOfWindow + 500) {
          $('.number-block .item-1 .num span').animateNumber({
            number: 38
          },2000);
          $('.number-block .item-2 .num span').animateNumber({
            number: 100
          },2100);
          $('.number-block .item-3 .num span').animateNumber({
            number: 50
          },3000);
          $('.number-block .item-4 .num span').animateNumber(
            {
              number: 1200,
            }, 2000);
          $('.number-block .item').addClass('stop');
        }
      });
    }

  });

  //scroll to block
  $(document).on('click', '.scroll', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });
});