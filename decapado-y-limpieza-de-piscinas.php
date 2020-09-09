<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="El arenado, granallado, chorreado, es imprescindible para trabajos que requieran la limpieza de superficie. En Global Dec los trabajos que realizamos en piscinas son..." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://globaldec.es" />
  <meta property="og:image" content="https://globaldec.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://globaldec.es">
  <meta property="og:title" content="Decapado y limpieza de piscinas | <?= $info['title'] ?>">
  <meta property="og:description" content="El arenado, granallado, chorreado, es imprescindible para trabajos que requieran la limpieza de superficie. En Global Dec los trabajos que realizamos en piscinas son...">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <title>Decapado y limpieza de piscinas | <?= $info['title'] ?></title>
</head>

<?php include('partials/navbar.php') ?>

<div class="u-spacer"></div>

<main class="service-info">

  <section class="u-margin-bottom-big">
    <h1 class="heading-primary u-text-white u-center-text u-margin-bottom-medium">Decapado y limpieza de piscinas</h1>
    <p class="paragraph-desc u-text-white u-margin-bottom-medium">El arenado, granallado, chorreado, es imprescindible para trabajos que requieran la limpieza de superficie. En Global Dec los trabajos que realizamos en piscinas son: </p>

    <div class="row">
      <div class="col-1-of-2">
        <article class="service service--lite" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/cloud-icon.svg" alt="Icono Servicio Eliminación de pintura con chorro de arena." />
          <h3 class="heading-tertiary u-margin-bottom-small">Eliminación de pintura con chorro de arena</h3>
          <p class="paragraph u-text-primary">
          Consiste en expulsar arena a presión mediante un chorro de aire, con el fin de lijar y eliminar las capas de pintura antigua, dejando la piscina limpia y preparada para volver a pintar o bien para la colocación de gresites, etc.
          </p>
        </article>
      </div>
      <div class="col-1-of-2">
        <article class="service  service--lite" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/water-icon.svg" alt="Icono Servicio Servicios de limpieza con agua a presión y mantenimiento." />
          <h3 class="heading-tertiary u-margin-bottom-small">Servicios de limpieza con agua a presión y mantenimiento</h3>
          <p class="paragraph u-text-primary">
          Estos servicios los realiza nuestro personal mediante hidrolimpiadoras  profesionales.
          </p>
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