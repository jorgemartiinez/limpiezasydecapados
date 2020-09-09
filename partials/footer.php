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
                <h3 class="footer__title">info@globaldec.es</h3>
                <address class="footer__info-text">Solicite su presupuesto sin compromiso. Se sorprenderá gratamente con nuestros precios.</address>
                <span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="footer__social">
            <a class="footer__link" href="#" title="Ver Política de Privacidad">Política de privacidad</a>
        </div>
    </div>
    <div class="row">
        <div class="footer__social">
            <a title="Ir a nuestro canal de Youtube" rel="noreferrer" class="footer__social-link" href="https://bit.ly/2NZrrcT">
                <img data-src="assets/img/icons/youtube-icon.svg" class="footer__social-logo lazy" alt="Acceder a Youtube">
            </a>
            <a title="Ir a nuestro Facebook" class="footer__social-link" rel="noreferrer" href="https://bit.ly/2Z1VOFC">
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
<!-- Magnific Popup core JS file -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Cookies -->
<script type="text/javascript" src="js/vendor/cookieBar.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>