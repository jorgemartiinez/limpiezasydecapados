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
    navItems.addClass('hide-menu');
    setTimeout(function () {
      navItems.removeClass('show-menu');
    }, 250);
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
    var pos = $id.offset().top - 20;

    // animated top scrolling
    $('body, html').animate({ scrollTop: pos }, 800);
  });
  // -----------------

  $(window)
    .scroll(function () {
      var windscroll = $(window).scrollTop();
      if (windscroll >= 100) {
        $('nav').addClass('u-shadow');
        // $('.main > section[id]').each(function (i) {
        //   console.log('each section', $(this).position().top, windscroll - 20);
        //   if ($(this).position().top <= windscroll - 100) {
        //     $('.nav__item a.active').removeClass('active');
        //     $('.nav__item a').eq(i).addClass('active');
        //   }
        // });
      } else {
        $('nav').removeClass('u-shadow');
        // $('.nav__item a.active').removeClass('active');
        // $('.nav__item a:first').addClass('active');
      }
    })
    .scroll();

  //aaa
  // Optimalisation: Store the references outside the event handler:
  var $window = $(window);

  function checkWidth() {
    var windowsize = $window.width();
    if (windowsize > 895) {
      navItems.removeClass('hide-menu');
      navItems.removeClass('show-menu');
    }
  }
  // Execute on load
  checkWidth();
  // Bind event listener
  $(window).resize(checkWidth);
});
