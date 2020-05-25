$(document).ready(function () {
  // cookies
  $('.cookie-bar').cookieBar({ closeButton: '.btn--cookie', expiresDays: 30 });
  // boton descarga
  var descargar = $('#descargar-folleto');

  descargar.click(function () {
    window.open('/assets/pdf/triptico-folleto.pdf', '__blank');
  });

  $('#contact-form').submit(enviarForm);

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
    navItems.addClass('hide-menu');
    setTimeout(function () {
      navItems.removeClass('show-menu');
    }, 250);
    $('body, html').animate({ scrollTop: pos }, 800);
  });
  // -----------------
  // * añadir clase para elevar el nav al empezar a hacer scroll
  $(window)
    .scroll(function () {
      var windscroll = $(window).scrollTop();
      if (windscroll >= 100) {
        $('nav').addClass('u-shadow');
      } else {
        $('nav').removeClass('u-shadow');
      }
    })
    .scroll();
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

  // * MISC

  var email = 'info';
  var arroba = '@';
  var dominio = 'limpiezasydecapadosalcoy.es';

  $('#email-contact').click(function () {
    window.location = 'mailto:' + email + arroba + dominio;
  });

  $('#phone-contact').click(function () {
    window.location = 'tel:' + '676201598';
  });
});

function enviarForm(e) {
  e.preventDefault();

  var email = $('#email').val();
  var nombre = $('#nombre').val();
  var mensaje = $('#mensaje').val();

  $.ajax({
    type: 'POST',
    url: 'server/contact/mail.php',
    data: { email: email, nombre: nombre, mensaje: mensaje },
    success: function (res) {
      $('#contact-form').trigger('reset');
      Swal.fire({ html: '<h2>Mensaje enviado correctamente</h2> <p>Nos pondremos en contacto contigo lo antes posible</p>', icon: 'success' });
    },
    err: function () {
      Swal.fire({
        html:
          '<h2>Error al enviar el correo</h2> <p>Se ha producido un error al enviar el email. Si el problema persiste ponte en contacto con nosotros vía email directamente</p>',
        icon: 'error'
      });
    }
  });
}
