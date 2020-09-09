<?php $inIndex = strpos($_SERVER['SCRIPT_NAME'], 'index.php') ?>
<body class="fadeIn">
<header class="header">
    <!-- Barra de navegación -->
    <nav class="nav">
      <div class="nav__logo">
        <a href="<?=  ($inIndex) ? '#inicio' : '/' ?>" class="nav__title-link">
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
        <?php if ($inIndex !== false){ ?>
          <li class="nav__item">
            <a href="#inicio" class="nav__link" title="Ir a Inicio" data-scroll="inicio">inicio</a>
          </li>
          <li class="nav__item">
            <a href="#servicios" class="nav__link" title="Ir a Servicios" data-scroll="servicios">servicios</a>
          </li>
          <li class="nav__item">
            <a href="#trabajos" class="nav__link" title="Ir a Trabajos" data-scroll="trabajos">trabajos</a>
          </li>
          <li class="nav__item">
            <a href="#contacto" class="nav__link" title="Ir a Contacto" data-scroll="contacto">contacto</a>
          </li>
          <?php } ?>
          <?php if ($inIndex == false){ ?>
          <li class="nav__item">
            <a href="/" class="nav__link" title="Volver a Inicio">Volver a inicio</a>
          </li>
          <?php } ?>
          <li class="nav__item">
            <a href="http://solucionesk3.es/" target="blank" rel="referrer" class="nav__link" title="Ir a la web de Soluciones K3">K3</a>
          </li>
          <a class="nav__cross"> </a>
        </ul>
      </div>
      <div class="nav__btn">
        <a class="btn btn--nav" href="tel:676201598" id="call-me" title="Llamar a <?= $info['title'] ?>">
          <img class="btn__icon" src="assets/img/icons/tel-icon.svg" alt="Llamar a empresa" /> 676 201 598</a>
      </div>
    </nav>
  </header>
