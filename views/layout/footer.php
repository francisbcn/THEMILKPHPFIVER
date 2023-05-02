</div>
</div>

<!-- PIE DE PÁGINA -->
<footer>
	<div class="social-cont container">
		<nav>
			<ul>
				<li><a target="_blank" href="https://www.instagram.com/themilkbarcelona/"><i class="fa-brands fa-instagram" alt="instagram the milk Barcelona" title="instagram the milk barcelona"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-square-twitter" alt="twitter the milk Barcelona" title="twitter the milk barcelona"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-tiktok" alt="tiktok the milk Barcelona" title="tiktok the milk barcelona"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-square-pinterest" alt="pinterest the milk Barcelona" title="pinterest the milk barcelona"></i></a></li>
			</ul>
		</nav>
	</div>
	<div class="footer-cont container">
		<nav class="foot-nav1">
			<ul>

			
				<li>
					<a href="<?= base_url ?>faq.php"><i class="fa-solid fa-circle-question" alt="preguntas frecuentes" title="preguntas frecuentes"></i> FAQ</a>
				</li>
				<li>
					<a href="<?= base_url ?>envios.php"><i class="fa-solid fa-truck-fast" alt="envios" title="mis envios"></i> ENVIOS </a>
				</li>
				<li>
					<a href="#"><i class="fa-solid fa-file-contract" alt="terminos y condicones the milk barcelona" title="terminos y condicones the milk barcelona"></i></i> TERMINOS & CONDICIONES </a>
				</li>
				<li>
					<a href="#"><i class="fa-solid fa-cart-arrow-down" alt="carrito the milk Barcelona" title="carrito the milk barcelona"></i> CARRITO</a>
				</li>	
				<li>
					<?php if (!isset($_SESSION['identity'])) : ?>
						<a href="<?= base_url ?>usuario.php">

							<i id="boton" class="fa-solid fa-address-card" alt="acerca de" title="acerca de"></i>

							LOGIN
						</a>
					<?php else : ?>
						<a href="<?= base_url ?>usuario.php"><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></a> <br>
						<a href="<?= base_url ?>usuario/logout">Cerrar sesión</a>
					<?php endif; ?>
				</li>
			</ul>
		</nav>
		<nav class="foot-nav2 container">
			<ul>
				<li><a href="<?= base_url ?>">INICIO</a></li>
				<li><a href="<?= base_url ?>tienda.php">#TIENDA</a></li>
				<li><a href="<?= base_url ?>somos.php">SOMOS</a></li>
				<li><a href="<?= base_url ?>contacto.php">CONTACTO</a></li>
				<li><a href="<?= base_url ?>faq.php">FAQ</a></li>
			</ul>
		</nav>
		<div>
			<a href="index.html">
				<img class="logo-size" src="<?= base_url ?>assets/img/the-milk-barcelona-logo.svg" alt="The Milk Barcelona logo" title="LGTBQ clothing the milk barcelona">
			</a>
		</div>
	</div>
	<div class="derechos">
    <p><span id="currentYear">&#169; The Milk Barcelona By Francis Pama</span></p>
</div>

</footer>
</div>
<script type="module" src="<?= base_url ?>assets/js/jquery.min.js"></script>
<script type="module" src="<?= base_url ?>assets/js/carrousel.js"></script>
<script type="module" src="<?= base_url ?>assets/js/hover-img.js"></script>
<script type="module" src="<?= base_url ?>assets/js/product.js"></script>
<script type="module" src="<?= base_url ?>assets/js/shopping-cart.js"></script>
<script type="module" src="<?= base_url ?>assets/js/producto-intento.js"></script>
<script type="module" src="<?= base_url ?>assets/js/acordion.js"></script>
<script type="module" src="<?= base_url ?>assets/js/time.js"></script>
<script type="module" src="<?= base_url ?>assets/js/sidenav.js"></script>



<!-- <script>
  document.querySelector('.header__logged-in a').addEventListener('click', function() {
  document.querySelector('form').classList.add('hide');
});

</script> -->

</body>


</html>