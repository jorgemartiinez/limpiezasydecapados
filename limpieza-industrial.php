<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="Nuestra empresa es experta en SERVICIOS DE LIMPIEZA INDUSTRIAL, de grandes superficies. Para mantener las instalaciones limpias y operar de manera segura , en Global Dec recomendamos una limpieza profunda de manera consistente y frecuente." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://globaldec.es" />
  <meta property="og:image" content="https://globaldec.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://globaldec.es">
  <meta property="og:title" content="Limpieza Industrial | <?= $info['title'] ?>">
  <meta property="og:description" content="Nuestra empresa es experta en SERVICIOS DE LIMPIEZA INDUSTRIAL, de grandes superficies. Para mantener las instalaciones limpias y operar de manera segura , en Global Dec recomendamos una limpieza profunda de manera consistente y frecuente.">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <title>Limpieza Industrial | <?= $info['title'] ?></title>
</head>

<?php include('partials/navbar.php') ?>

<div class="u-spacer"></div>

<main class="service-info">

  <section class="u-margin-bottom-big">
    <h1 class="heading-primary u-text-white u-center-text u-margin-bottom-medium">Limpieza Industrial.
    </h1>
    <p class="paragraph-desc u-text-white u-margin-bottom-medium">Nuestra empresa es experta en SERVICIOS DE LIMPIEZA INDUSTRIAL, de grandes superficies. Para mantener las instalaciones limpias y operar de manera segura , en Global Dec recomendamos una limpieza profunda de manera consistente y frecuente. </p>

    <div class="row">
      <div class="col-1-of-2">
        <article class="service  service--mini" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/industry-icon.svg" alt="Icono Servicios de limpieza industrial" />
          <h3 class="heading-tertiary u-margin-bottom-small">Limpieza industrial</h3>
          <p class="paragraph u-text-primary">
            De naves, fabricas, locales, parking, garajes, etc.
          </p>
        </article>
      </div>
      <div class="col-1-of-2">
        <article class="service  service--mini" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/viaria-icon.svg" alt="Icono  Servicios de limpieza viaria" />
          <h3 class="heading-tertiary u-margin-bottom-small">Limpieza viaria</h3>
          <p class="paragraph u-text-primary">
            Avenidas, calzadas, calles, aceras.
          </p>
          </p>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="col-1-of-2">
        <article class="service  service--mini" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/hosehold-icon.svg" alt="Icono  Servicios de limpieza con agua a presión y mantenimiento." />
          <h3 class="heading-tertiary u-margin-bottom-small">Agua a presión</h3>
          <p class="paragraph u-text-primary">
            Todo tipo de aplicaciones industriales y domésticas
          </p>
        </article>
      </div>
      <div class="col-1-of-2">
        <article class="service service--mini" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/steam-icon.svg" alt="Icono  Servicios de desinfección a vapor" />
          <h3 class="heading-tertiary u-margin-bottom-small">Desinfección con vapor</h3>
          <p class="paragraph u-text-primary">
            Máquinas profesionales de alto rendimiento para la limpieza y desinfección tanto industrial como doméstico.
          </p>
        </article>
      </div>
    </div>
  </section>

  <div class="u-center-text">
    <a class="btn" href="/"> Volver a Inicio</a>
  </div>

</main>

<?php include('partials/footer.php') ?>