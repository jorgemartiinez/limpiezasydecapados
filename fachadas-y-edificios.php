<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Tags -->
  <meta name="keywords" content="<?= $info['title'] ?>, soluciones k3, limpiezas alcoy, decapados alcoy, limpiezas alicante, decapados alicante">
  <meta name="description" content="Especializada en SERVICIOS DE LIMPIEZA, decapado y rehabilitación Global Dec garantiza, a través de sus servicios, que su edificio este bien mantenido, limpio y sea acogedor para sus visitantes en todo momento." />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <meta name="author" content="<?= $info['title'] ?>" />
  <meta name="copyright" content="<?= $info['title'] ?>" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <link rel="canonical" href="https://globaldec.es" />
  <meta property="og:image" content="https://globaldec.es/assets/img/logo.jpeg">
  <meta property="og:url" content="https://globaldec.es">
  <meta property="og:title" content="Fachadas y Edificios | <?= $info['title'] ?>">
  <meta property="og:description" content="Especializada en SERVICIOS DE LIMPIEZA, decapado y rehabilitación Global Dec garantiza, a través de sus servicios, que su edificio este bien mantenido, limpio y sea acogedor para sus visitantes en todo momento.">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <title>Fachadas y Edificios | <?= $info['title'] ?></title>
</head>

<?php include('partials/navbar.php') ?>

<div class="u-spacer"></div>

<main class="service-info">

  <section class="u-margin-bottom-big">
    <h1 class="heading-primary u-text-white u-center-text u-margin-bottom-medium">Fachadas y Edificios
    </h1>
    <p class="paragraph-desc u-text-white u-margin-bottom-medium">Especializada en SERVICIOS DE LIMPIEZA, decapado y rehabilitación Global Dec garantiza, a través de sus servicios, que su edificio este bien mantenido, limpio y sea acogedor para sus visitantes en todo momento. </p>

    <div class="row">
      <div class="col-1-of-2">
        <article class="service service--lite" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/hosehold-icon.svg" alt="Icono Servicio Limpieza y Rehabilitación de Fachadas con chorro de arena" />
          <h3 class="heading-tertiary u-margin-bottom-small">Limpieza y Rehabilitación de Fachadas con chorro de arena</h3>
          <p class="paragraph u-text-primary">
            Permite una desincrustación total de la suciedad sin dañar la superficie, porque podemos elegir el abrasivo y también regular la potencia del chorro La LIMPIEZA ABRASIVA se puede hacer en seco o en húmedo, dependiendo de cada trabajo. Estas técnicas las podemos emplear en fachadas de piedra, fachadas de monocapa, fachadas de ladrillo caravista, edificios históricos, monumentos, etc. Uno de los beneficios del arenado con chorro húmedo es que reduce muchísimo el polvo, también esta conocido como, chorro húmedo, chorreado abrasivo húmedo, chorreado con vapor, chorro sin polvo, arenado húmedo, vapor blasting.
          </p>
        </article>
      </div>
      <div class="col-1-of-2">
        <article class="service  service--lite" title="Clic para saber más">
          <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/hose-icon.svg" alt="Icono Servicio LIMPIEZA DE FACHADA, EDIFICIOS con agua a presión" />
          <h3 class="heading-tertiary u-margin-bottom-small">LIMPIEZA DE FACHADA, EDIFICIOS con agua a presión</h3>
          <p class="paragraph u-text-primary">
            La realizamos con nuestras hidrolimpiadoras profesionales, conocida tambien como la LIMPIEZA CON KARCHER. Empleamos esta técnica para ELIMINAR LA SUCIEDAD, restos de pintura, moho, salitre, etc. Limpiamos fachadas,edificios, puentes, fuentes, etc. Mediante este proceso la superficie se queda limpia y preparada para el siguiente tratamiento.
          </p>
          </p>
        </article>
      </div>
    </div>

    <div class="row">
      <article class="service  service--lite" title="Clic para saber más">
        <img class="service__icon u-margin-bottom-small lazy" data-src="assets/img/icons/build-icon.svg" alt="Icono  Servicios de DECAPADO DE FACHADAS, EDIFICIOS CON CHORRO DE ARENA " />
        <h3 class="heading-tertiary u-margin-bottom-small">DECAPADO DE FACHADAS, EDIFICIOS CON CHORRO DE ARENA </h3>
        <p class="paragraph u-text-primary">
          Decapado con chorro de arena (Arenado, Granallado, Pulido, Lijado, Limpieza Abrasiva ) es una tecnica optima para tratar edificios, fachadas, etc. Esta tecnica consiste en expulsar arena a presion mediante un chorro de aire, la friccion de los granos sobre la superficie despega la suciedad incrustada , eliminando oxido en estructuras metalicas, capas de pinturas mal adheridas, morteros, consiguiendo una determinada rugosidad, para su posterior aplicación de monocapas, pinturas o otros morteros.
        </p>
        </p>
      </article>
    </div>

    <h2 class="heading-secondary atention">DECAPADO, LIMPIEZA, REHABILITACION, REPARACION, RESTAURACION, RECUPERACION, PINTURA, MANTENIMIENTO DE FACHADAS Y EDIFICIOS, ETC. </h2>
  </section>


  <div class="u-center-text">
    <a class="btn" href="/"> Volver a Inicio</a>
  </div>

</main>

<?php include('partials/footer.php') ?>