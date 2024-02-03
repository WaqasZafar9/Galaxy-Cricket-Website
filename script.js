$(function () {
  var tickerLength = $('.carousel-inner-data ul li').length;
  var tickerHeight = $('.carousel-inner-data ul li').outerHeight();
  $('.carousel-inner-data ul li:last-child').prependTo('.carousel-inner-data ul');
  $('.carousel-inner-data ul').css('marginTop', -tickerHeight);

  function moveTop() {
      $('.carousel-inner-data ul').animate({
          top: -tickerHeight
      }, 600, function () {
          $('.carousel-inner-data ul li:first-child').appendTo('.carousel-inner-data ul');
          $('.carousel-inner-data ul').css('top', '');
      });

  }
  setInterval(function () {
      moveTop();
  }, 3000);
});

