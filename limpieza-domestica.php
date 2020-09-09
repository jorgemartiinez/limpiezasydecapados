<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="Global Dec se encarga de ofrecer servicios de limpieza y desinfección con vapor." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://globaldec.es" />
  <meta property="og:image" content="https://globaldec.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://globaldec.es">
  <meta property="og:title" content="Fachadas y Edificios | <?= $info['title'] ?>">
  <meta property="og:description" content="Global Dec se encarga de ofrecer servicios de limpieza y desinfección con vapor.">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <title>Limpieza Doméstica | <?= $info['title'] ?></title>
</head>

<?php include('partials/navbar.php') ?>

<div class="u-spacer"></div>

<main class="service-info">

  <section class="u-margin-bottom-big">
    <h1 class="heading-primary u-text-white u-center-text u-margin-bottom-medium">Limpieza Doméstica
    </h1>
    <p class="paragraph-desc u-text-white u-margin-bottom-medium">Global Dec se encarga de ofrecer servicios de limpieza y desinfección con vapor. La LIMPIEZA CON VAPOR significa eliminar en parte el numero de bacterias que se encuentran en un determinado ambiente o superficie. Algunos de los servicios que ofrecen Global Dec: Limpieza y mantenimiento de comunidades, escaleras, chalets, casas, negocios en general, etc. Limpieza fin de obra.</p>
  </section>

  <div class="u-center-text">
    <a class="btn" href="/"> Volver a Inicio</a>
  </div>

</main>

<?php include('partials/footer.php') ?>