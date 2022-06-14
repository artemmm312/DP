jQuery(function () {
  $(".bottom-header__nav-menu-link").hover(function () {
    $(this).toggleClass("line-height");
  });
  $(".drop").on("mouseenter", () => $('.shadow').show());
  $(".drop").on("mouseleave", () => $('.shadow').hide());
  $(".dropdown").on("mouseenter", () => $('.shadow').show());
  $(".dropdown").on("mouseleave", () => $('.shadow').hide());
  $("#burger").on('change', function () {
    if (this.checked) {
      $('.shadow').show();
    } else {
      $('.shadow').hide();
    }
  });


  $('.top-main__slider').slick({
    arrows: false,
    dots: true,
    //appendDots: $('.top-main__slider-content'),
  });

  //$('.top-main__slider').slick('setPosition');

  $('.lenta-slider').slick({
    arrows: false,
    dots: true,
  });

  var options = {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    weekday: 'long',
  };
  let data = new Date().toLocaleDateString('ru', options);
  document.getElementById('header-date').innerHTML = data[0].toUpperCase() + data.substring(1);
});