<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="Somos una empresa que ofrece servicios de limpieza, decapados y restauración profesionales a un precio muy económico." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://limpiezasydecapadosalcoy.es" />
  <meta property="og:image" content="https://limpiezasydecapadosalcoy.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://limpiezasydecapadosalcoy.es">
  <meta property="og:title" content="Inicio | <?= $info['title'] ?>">
  <meta property="og:description" content="Somos una empresa ubicada en Alcoy que ofrece servicios de limpieza, decapados y restauración profesionales a un precio muy económico.">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link rel="stylesheet" href="css/main.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <title>Inicio | <?= $info['title'] ?></title>
</head>

<body>
  <header class="header">
    <!-- Barra de navegación -->
    <nav class="nav">
      <div class="nav__logo">
        <a href="#inicio" class="nav__title-link">
          <?= $info['title'] ?>
        </a>
      </div>
      <div class="nav__mobile">
        <div class="nav__burger">
          <div class="nav__burger-line"></div>
          <div class="nav__burger-line"></div>
          <div class="nav__burger-line"></div>
        </div>
      </div>
      <div class="nav__links-wrapper">
        <ul class="nav__links">
          <li class="nav__item">
            <a href="#inicio" class="nav__link" data-scroll="inicio">inicio</a>
          </li>
          <li class="nav__item">
            <a href="#servicios" class="nav__link" data-scroll="servicios">servicios</a>
          </li>
          <li class="nav__item">
            <a href="#trabajos" class="nav__link" data-scroll="trabajos">trabajos</a>
          </li>
          <li class="nav__item">
            <a href="#contacto" class="nav__link" data-scroll="contacto">contacto</a>
          </li>
          <a class="nav__cross"> </a>
        </ul>
      </div>
      <div class="nav__btn">
        <a class="btn btn--nav" href="tel:676201598" id="call-me"><img class="btn__icon" src="assets/img/icons/tel-icon.svg" alt="Llamar a empresa" /> 676 201 598</a>
      </div>
    </nav>
  </header>

  <!-- Hero section -->
  <section class="hero" id="inicio" data-anchor="inicio">
    <div class="u-spacer">
      &nbsp;
    </div>
    <div class="row">
      <div class="col-1-of-2" id="mobile-col">
        <div class="hero__illus">
          <img class="hero__img" src="assets/img/logo-2.jpg" alt="Logo <?= $info['title'] ?>" />
        </div>
      </div>
      <div class="col-1-of-2">
        <div class="hero__welcome">
          <h1 class="heading-primary u-margin-bottom-small">Limpiezas y decapados profesionales</h1>
          <p class="paragraph u-margin-bottom-medium u-text-primary">
            Desde <span class="u-text-accent">Limpieza y Decapado Alcoy</span> ofrecemos todo tipo de soluciones de limpieza y restauración a un
            precio muy económico.
          </p>
          <div class="u-center-text">
            <a href="#servicios" data-scroll="servicios" class="btn btn--outline">SABER MÁS</a>
          </div>
        </div>
      </div>
      <div class="col-1-of-2">
        <div class="hero__illus">
          <img class="hero__img" src="assets/img/logo-2.jpg" alt="Logo <?= $info['title'] ?>" />
        </div>
      </div>
    </div>
  </section>

  <main class="main">

    <!-- Sección servicios -->
    <section class="services" id="servicios" data-anchor="servicios">
      <h2 class="heading-secondary u-margin-bottom-mini u-center-text">Nuestros servicios</h2>
      <p class="paragraph u-text-white u-center-text u-margin-bottom-big">
        Ofrecemos soluciones integrales de limpieza, desinfección y restauración en edificios e instalaciones de todo tipo.
      </p>
      <?php
      $numOfCols = 3;
      $rowCount = 0;
      foreach ($services as $i => $service) {
        if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                              $rowCount++; ?>
          <div class="col-1-of-3">
            <article class="service">
              <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/<?= $service['icon'] ?>" alt="Icono Servicio <?= $service['title'] ?>" />
              <h3 class="heading-tertiary u-margin-bottom-small"><?= $service['title'] ?></h3>
              <p class="paragraph u-text-primary">
                <?= $service['text'] ?>
              </p>
            </article>
          </div>
          <?php
          if ($rowCount % $numOfCols == 0) { ?> </div>
      <?php }
        } ?>
    </section>

    <!-- Sección opiniones clientes -->
    <section class="client-opinion u-margin-top-big u-margin-bottom-medium">
      <h2 class="heading-secondary u-margin-bottom-medium u-center-text">LO QUE OPINAN NUESTROS CLIENTES</h2>
      <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img src="assets/img/clientes/profile_pic.png" alt="Person on a tour" class="story__img" />
            <figcaption class="story__caption">ICS Gráfico Alcoy</figcaption>
          </figure>

          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">Son un equipo muy profesional.</h3>
            <p class="paragraph">
              "Todo perfecto. Les contratamos habitualmente para la limpieza de los ventanales de nuestra oficina y siempre quedamos satisfechos.
              ¡Muy serios y muy buen precio!."
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección de trabajos -->
    <section class="trabajos" id="trabajos" data-anchor="trabajos">
      <div class="u-center-text u-margin-bottom-medium">
        <h2 class="heading-secondary">Nuestros trabajos</h2>
        <p class="paragraph">Nuestra amplia experiencia nos permite afrontar toda una serie de proyectos muy variados.</p>
      </div>

      <?php
      $numOfCols = 3;
      $rowCount = 0;
      foreach ($jobs as $i => $job) {
        if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                              $rowCount++; ?>
          <div class="col-1-of-3">
            <article class="trabajo">
              <img class="trabajo__img lazy" data-src="assets/img/trabajos/<?= $job['img'] ?>" alt="Trabajo <?= $job['overlay_text'] ?>" />
              <p class="trabajo__overlay"><?= $job['overlay_text'] ?></p>
            </article>
          </div>
          <?php
          if ($rowCount % $numOfCols == 0) { ?> </div>
      <?php }
        } ?>
    </section>

    <!-- Sección Folleto -->
    <section class="folleto">
      <div class="row">
        <h2 class="heading-secondary u-center-text u-margin-bottom-small">Solicitar más información</h2>
        <button class="btn" id="descargar-folleto">DESCARGAR FOLLETO</button>
      </div>
    </section>
  </main>

  <!-- Sección contacto -->
  <section class="contact" id="contacto" data-anchor="contacto">
    <div class="row">
      <form id="contact-form" class="form u-center-text">
        <fieldset class="form__fieldset u-margin-bottom-medium u-text-white">
          <legend class="heading-secondary u-margin-bottom-small u-center-text u-text-white">Contacto</legend>
          <p class="paragraph u-center-text u-margin-bottom-big">
            No dudes en ponerte con nosotros para cualquier consulta o presupuesto. Nuestro equipo de profesionales estará encantado de atenderte
            con la mayor brevedad posible.
          </p>
          <div class="row">
            <label for="nombre" class="form__label">Nombre: </label>
            <input type="text" id="nombre" name="nombre" minlength="2" maxlength="150" class="form__input" required />
          </div>
          <div class="row">
            <label for="email" class="form__label">Correo: </label>
            <input type="email" id="email" name="email" minlength="5" maxlength="180" class="form__input" required />
          </div>
          <div class="row">
            <label for="mensaje" class="form__label">Mensaje: </label>
            <textarea type="text" id="mensaje" name="mensaje" class="form__textarea" minlength="10" maxlength="300" required></textarea>
          </div>
        </fieldset>
        <button class="btn btn--outline btn--border-thic" type="submit">
          ENVIAR
        </button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="row">
      <div class="col-1-of-3">
        <div class="footer__info">
          <img class="footer__icon lazy" data-src="assets/img/icons/home-icon.svg" alt="Dirección <?= $info['title'] ?>">
          <h3 class="footer__title">Calle Terrasa, 2 - Alcoy</h3>
          <address class="footer__info-text">Si quieres hacernos una visita,
            nos encontramos en <strong>Calle Terrasa, 2 - Alcoy (Alicante)</strong></address>
          <span>
        </div>
      </div>
      <div class="col-1-of-3">
        <div class="footer__info">
          <img class="footer__icon lazy" data-src="assets/img/icons/phone2-icon.svg" alt="Teléfono <?= $info['title'] ?>" id="phone-contact">
          <h3 class="footer__title">676 201 598</h3>
          <address class="footer__info-text">Llámenos si necesita más información. Resolveremos todas sus dudas con interés.</address>
          <span>
        </div>
      </div>
      <div class="col-1-of-3">
        <div class="footer__info">
          <img class="footer__icon lazy" data-src="assets/img/icons/email-icon.svg" alt="Dirección <?= $info['title'] ?>" id="email-contact">
          <h3 class="footer__title">info@limpiezasydecapadosalcoy.es</h3>
          <address class="footer__info-text">Solicite su presupuesto sin compromiso. Se sorprenderá gratamente con nuestros precios.</address>
          <span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer__social">
        <a class="footer__link" href="#">Política de privacidad</a>
      </div>
    </div>
    <div class="row">
      <div class="footer__social">
        <a class="footer__social-link" href="https://www.youtube.com/channel/UCjMCy83lHLODkVZR-SnpbFQ">
          <img data-src="assets/img/icons/youtube-icon.svg" class="footer__social-logo lazy" alt="Acceder a Youtube">
        </a>
        <a class="footer__social-link" href="https://es-es.facebook.com/pages/category/Janitorial-Service/Soluciones-K3-limpieza-y-restauraci%C3%B3n-584800761884510/">
          <img data-src="assets/img/icons/facebook-icon.svg" class="footer__social-logo lazy" alt="Acceder a Facebook">
        </a>
      </div>
    </div>
  </footer>

  <!-- copy -->
  <footer class="copyright">
    <p class="copyright-text">© <?= $info['title'] ?>, <?php echo date("Y"); ?>
    </p>
  </footer>

  <!-- Cookie bar -->
  <div class="cookie-bar">
    <span class="cookie-bar__text">Esta web utiliza cookies para mejorar la experiencia y proporcionar funcionalidades adicionales.</span>
    <a class="btn btn--outline btn--cookie btn--small" href>Aceptar</a>
  </div>

  <!-- Scripts -->
  <noscript>Necesitas tener Javascript activado para visualizar esta web.</noscript>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <!-- lazy load -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
  <!-- Sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Cookies -->
  <script type="text/javascript" src="js/vendor/cookieBar.min.js"></script>
  <script src="js/main.min.js"></script>
</body>

</html>