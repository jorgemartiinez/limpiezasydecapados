<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="Somos una empresa de Alcoy que ofrece servicios de limpieza, decapados y restauración profesionales a un precio muy económico." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://globaldec.es" />
  <meta property="og:image" content="https://globaldec.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://globaldec.es">
  <meta property="og:title" content="Inicio | <?= $info['title'] ?>">
  <meta property="og:description" content="Somos una empresa ubicada en Alcoy que ofrece servicios de limpieza, decapados y restauración profesionales a un precio muy económico.">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <!-- Magnific Popup CSS  -->
  <link rel="stylesheet" href="css/vendor/magnific.min.css">
  <title>Inicio | <?= $info['title'] ?></title>
</head>


  <?php include('partials/navbar.php') ?>

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
          <h1 class="heading-primary u-margin-bottom-small">Decapados y limpiezas con chorro de arena</h1>
          <p class="paragraph u-margin-bottom-medium u-text-primary">
            Desde <span class="u-text-accent"><?= $info['title'] ?></span> ofrecemos todo tipo de soluciones de decapados y limpieza a un
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
      <p class="paragraph u-text-white u-center-text">
        Ofrecemos soluciones integrales de limpieza, desinfección y restauración en edificios e instalaciones de todo tipo.
      </p>
      <p class="paragraph u-text-white u-center-text u-margin-bottom-big">
        Haga click en el servicio para saber más sobre el.
      </p>
      <?php
      $numOfCols = 3;
      $rowCount = 0;
      foreach ($services as $i => $service) {
        if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                              $rowCount++; ?>
          <div class="col-1-of-3" onclick="window.location.href = '<?php echo $service['url'] ?>'">
            <article class="service" title="Clic para saber más">
              <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/<?= $service['icon'] ?>" alt="Icono Servicio <?= $service['title'] ?> <?= $info['title'] ?>" />
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
            <img src="assets/img/clientes/profile_pic.png" alt="Opinión Cliente ICS Gráfico <?= $info['title'] ?>" class="story__img" />
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
            <a class="popup-img" href="assets/img/trabajos/<?= $job['img'] ?>">
              <article class="trabajo">
                <img class="trabajo__img lazy" data-src="assets/img/trabajos/<?= $job['img'] ?>" alt="Trabajo <?= $job['overlay_text'] ?>" />
                <p class="trabajo__overlay"><?= $job['overlay_text'] ?></p>
              </article>
            </a>
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

<?php include('partials/footer.php') ?>