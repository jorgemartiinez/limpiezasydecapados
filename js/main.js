$(document).ready(function () {
  console.log('ready!');

  // * MENÚ MOVIL
  var menuBtn = $('.nav__burger');
  var navItems = $('.nav__links-wrapper');
  var navCross = $('.nav__cross');

  menuBtn.click(function () {
    navItems.addClass('show-menu');
    navItems.removeClass('hide-menu');
  });

  navCross.click(function () {
    navItems.removeClass('show-menu');
    navItems.addClass('hide-menu');
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
        // $('.wrapper section').each(function (i) {
        //   if ($(this).position().top <= windscroll - 100) {
        //     $('nav a.active').removeClass('active');
        //     $('nav a').eq(i).addClass('active');
        //   }
        // });
      } else {
        $('nav').removeClass('u-shadow');
      }
    })
    .scroll();

  //aaa
  // // Optimalisation: Store the references outside the event handler:
  var $window = $(window);

  function checkWidth() {
    var windowsize = $window.width();
    if (windowsize > 899) {
      navItems.removeClass('hide-menu');
      navItems.removeClass('show-menu');
    }
  }
  // Execute on load
  checkWidth();
  // Bind event listener
  $(window).resize(checkWidth);
});
