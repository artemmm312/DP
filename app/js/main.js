jQuery(function () {
  $(".bottom-header__nav-menu-link").hover(function () {
    $(this).toggleClass("line-height");
  });
  $(".drop").on("mouseenter", () => $('.shadow').show());
  $(".drop").on("mouseleave", () => $('.shadow').hide());
  $(".dropdown").on("mouseenter", () => $('.shadow').show());
  $(".dropdown").on("mouseleave", () => $('.shadow').hide());
  $("#burger").on('change', function ( ) {
    if (this.checked) {
      $('.shadow').show();
    } else {
      $('.shadow').hide();
    }
  });



/*   new Splide('.splide', {
    type: 'loop',
    perPage: 1,
    speed: 1000,
    arrows: false,
    autoplay: true,
    interval: 5000,
    pauseOnHover: true,
  }).mount(); */



/*   $(window).resize(function () {
    $('#wrapper').css({
      'height': ($(document).height()) + 'px'
    });
    alert('hello');
  }); */


  var options = {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    weekday: 'long',
  };
  let data = new Date().toLocaleDateString('ru', options);
  document.getElementById('header-date').innerHTML = data[0].toUpperCase() + data.substring(1);
});