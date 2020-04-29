$(document).ready(function () {
  console.log('ready!');
  var menuBtn = $('.nav__burger');
  var navItems = $('.nav__item');
  var menuOpen = false;
  menuBtn.click(function () {
    if (!menuOpen) {
      navItems.addClass('u-flexify');
      menuOpen = true;
    } else {
      navItems.removeClass('u-flexify');
      menuOpen = false;
    }
  });

  $(window)
    .scroll(function () {
      var windscroll = $(window).scrollTop();
      if (windscroll >= 100) {
        $('nav').addClass('u-shadow');
        $('.wrapper section').each(function (i) {
          if ($(this).position().top <= windscroll - 100) {
            $('nav a.active').removeClass('active');
            $('nav a').eq(i).addClass('active');
          }
        });
      } else {
        $('nav').removeClass('u-shadow');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
      }
    })
    .scroll();
});
