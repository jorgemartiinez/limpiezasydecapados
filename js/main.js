$(document).ready(function () {
  console.log('ready!');

  // * MENÚ MOVIL
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

  // ---------------------
  // * animar scroll en los links que empiezen con #
  $(document).on('click', 'a[href^="#"]', function (e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
      return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top - 50;

    // animated top scrolling
    $('body, html').animate({ scrollTop: pos });
  });
  // -----------------
  // * añadir clase para elevar el nav al empezar a hacer scroll
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
