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

  $('.form').submit(enviarForm);
});

function comprobarCampo(campo) {
  let mensajeError = '';
  let divError = null;
  campo.setCustomValidity('');
  divError = campo.nextElementSibling;

  if (campo.checkValidity()) {
    //si se cumplen todas las condiciones, eliminaremos el error, y devolveremos true
    if (divError) {
      campo.parentNode.removeChild(campo.nextElementSibling);
      campo.style.borderColor = '#5cb85c';
    }
    return true;
  } else {
    //si no se cumplen las condiciones, validaremos los diferentes tipos de entrada
    campo.setCustomValidity('');
    if (divError) {
      //comprobamos que exista, y lo borramos para volver a hacer las comprobaciones
      campo.parentNode.removeChild(campo.nextElementSibling);
    }
    if (campo.validity.valueMissing) {
      //que el valor sea obligatorio
      campo.setCustomValidity('El campo ' + campo.id + ' es obligatorio.'); //personalizamos el mensaje
      pintarError(campo.validationMessage, campo); //lo enviamos a la función que pintará el error por pantalla
      return false;
    } else if (campo.validity.rangeUnderflow) {
      //es menor al rango requerido
      campo.setCustomValidity('El campo ' + campo.id + ' debe ser mayor a ' + campo.min);
      pintarError(campo.validationMessage, campo); //enviamos el mensaje para generarar el error
      return false;
    } else if (campo.validity.rangeOverflow) {
      //es mayor al rango requerido
      campo.setCustomValidity('El campo ' + campo.id + ' debe ser menor de ' + campo.max);
      pintarError(campo.validationMessage, campo); //enviamos el mensaje para generarar el error
      return false;
    } else if (campo.validity.badInput) {
      //no cumple el tipo de dato indicado en el input
      campo.setCustomValidity('El campo ' + campo.id + ' debe de ser del tipo ' + campo.type);
      pintarError(campo.validationMessage, campo);
      return false;
    } else if (campo.validity.stepMismatch) {
      //no sigue el step indicado en el input
      campo.setCustomValidity('El campo ' + campo.id + ' no es correcto. Su valor debe de ir de ' + campo.step + ' en ' + campo.step);
      pintarError(campo.validationMessage, campo);
      return false;
    } else if (campo.validity.tooLong) {
      //es demasiado grande
      campo.setCustomValidity('El campo ' + campo.id + ' debe ser menor de ' + campo.maxLength + ' carácteres.');
      pintarError(campo.validationMessage, campo);
      return false;
    } else if (campo.validity.tooShort) {
      //es demasiado corto
      campo.setCustomValidity('El campo ' + campo.id + ' debe ser mayor de ' + campo.minLength + ' carácteres.');
      pintarError(campo.validationMessage, campo);
      return false;
    } else if (campo.validity.typeMismatch) {
      //no es igual al type indicado en el html

      if (campo.type == 'email') {
        campo.setCustomValidity('El campo ' + campo.id + ' no es un email válido.');
      } else {
        campo.setCustomValidity('El campo ' + campo.id + ' no es un ' + campo.type + ' válido.');
      }
      pintarError(campo.validationMessage, campo);
      return false;
    } else if (campo.validity.tooShort) {
      //no cumple el pattern
      campo.setCustomValidity('El campo ' + campo.id + ' debe cumplir el patron indicado.');
      pintarError(campo.validationMessage, campo);
      return false;
    }
  }
}

//función que recibirá el mensaje y el campo al que darle este lo pintará después del input.
function pintarError(mensajeError, campo) {
  campo.setCustomValidity('');
  campo.style.borderColor = '#d9534f';
  let span = document.createElement('span');
  span.className = 'form__error';
  span.innerHTML += mensajeError;
  campo.parentNode.appendChild(span);
}
