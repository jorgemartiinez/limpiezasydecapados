<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="En Global Dec también ofrecemos SERVICIOS DE LIMPIEZA de madera con chorro de arena. Con el paso del tiempo la madera empieza a oscurecerse, ensuciarse con restos de morteros, polvo, etc. Con la LIMPIEZA ABRASIVA le devolvemos el aspecto original, usando diferentes abrasivos para cada superficie." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://globaldec.es" />
  <meta property="og:image" content="https://globaldec.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://globaldec.es">
  <meta property="og:title" content="Decapado de superficies metálicas | <?= $info['title'] ?>">
  <meta property="og:description" content="En Global Dec también ofrecemos SERVICIOS DE LIMPIEZA de madera con chorro de arena. Con el paso del tiempo la madera empieza a oscurecerse, ensuciarse con restos de morteros, polvo, etc. Con la LIMPIEZA ABRASIVA le devolvemos el aspecto original, usando diferentes abrasivos para cada superficie.">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <title>Decapado, Limpieza y Tratamiento de Madera | <?= $info['title'] ?></title>
</head>

<?php include('partials/navbar.php') ?>

<div class="u-spacer"></div>

<main class="service-info">

  <section class="u-margin-bottom-big">
    <h1 class="heading-primary u-text-white u-center-text u-margin-bottom-medium">DECAPADO, LIMPIEZA Y TRATAMIENTO DE MADERA</h1>
    <p class="paragraph-desc u-text-white u-margin-bottom-medium">En Global Dec también ofrecemos SERVICIOS DE LIMPIEZA de madera con chorro de arena. Con el paso del tiempo la madera empieza a oscurecerse, ensuciarse con restos de morteros, polvo, etc. Con la LIMPIEZA ABRASIVA le devolvemos el aspecto original, usando diferentes abrasivos para cada superficie. </p>

    <div class="row">
      <div class="col-1-of-2">
        <article class="service service--lite" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/cloud-icon.svg" alt="Icono Servicio Decapado de madera con chorro de arena" />
          <h3 class="heading-tertiary u-margin-bottom-small">DECAPADO DE MADERA CON CHORRO DE ARENA</h3>
          <p class="paragraph u-text-primary">
          Para el decapado de madera usamos la misma técnica de ARENADO, GRANALLADO, CHORREADO, pero con el fin de PULIR, LIJAR, ELIMINAR, las pinturas, barnices, etc. Tanto la Limpieza como el Decapado las empleamos en vigas de madera antiguas, puertas, ventanas, muebles, embarcaciones de madera, superficies de madera en general.
          </p>
        </article>
      </div>
      <div class="col-1-of-2">
        <article class="service  service--lite" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/wood-box-icon.svg" alt="Icono Servicio tratamiento de madera" />
          <h3 class="heading-tertiary u-margin-bottom-small">TRATAMIENTO DE MADERA</h3>
          <p class="paragraph u-text-primary">
          Después de la limpieza o decapado en Global Dec también tratamos las superficies de matera para eliminación de carcomas, termitas, etc., o bien para prevenir.
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