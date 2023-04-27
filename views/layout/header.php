<?php
require_once('models/Consulta.php');
require_once('models/BaseMysql.php');

$bd = new BaseMysql();
$consulta = new Consulta();

$productos = [];

if (isset($_GET['busqueda']) && !empty(trim($_GET['busqueda']))) {
    $productos = $consulta->buscarProducto($bd, 'nombre', $_GET['busqueda']);
}
?>
<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url ?>assets/css/fonts.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/contacto.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/reset.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/tienda.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/carrousel.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/faq.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/somos.css">
	<link rel="stylesheet" href="<?= base_url ?>assets/css/users.css">
	<!-- 	<?php if ($var == "contacto.php") //cargar stilo contacto.css 
				?> -->
	<link rel="stylesheet" href="<?= base_url ?>assets/css/styles-fran.css">
	<title>The Milk Barcelona: Tienda Inclusiva</title>
	<script src="https://kit.fontawesome.com/d80044a3f4.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat+Alternates:wght@500&family=Pacifico&family=Bungee&display=swap" rel="stylesheet">


</head>

<body>
	<div id="container">
		<header>
			<section class="header__etsy">
				<h1> Tienda de ropa LGTBIQ+ The Milk Barcelona</h1>
				<p>Encuentra nuestra tienda artesanal en <span><a class="etsy-nombre" target="_blank" href="http s://www.etsy.com/es/shop/TheMilkBarcelona?ref=profile_header">Etsy</a></span></p>

				<?php if (!isset($_SESSION['identity'])) : ?>
					<a href="<?= base_url ?>usuario.php"><i class="fa-regular fa-circle-user"></i><span class="milkiwer-inicio">#MILKIWER</span> </a>

				<?php else : ?>
					<div class="logged-in-container">
						<div class="header__logged-in">
							<h3>#Milkiwer: <a class="user-logged" href="<?= base_url ?>usuario.php"><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></a> || </h3>
							<a href="<?= base_url ?>usuario/logout">Cerrar sesión</a>
						</div>
					</div>
				<?php endif; ?>
			</section>


			<picture class="container">
				<a href="<?= base_url ?>">
					<img src="<?= base_url ?>assets/img/the-milk-barcelona-logo.svg" alt="Hecho en Barcelona" title="The Milk Barcelona tienda LGTBIQ+">
				</a>
			</picture>


			<div class="menus">
				<nav class="nav-1">
					<ul>
						<li><a href="<?= base_url ?>">INICIO</a></li>
						<li><a href="<?= base_url ?>tienda.php">#TIENDA</a></li>
						<li><a href="<?= base_url ?>somos.php">SOMOS</a></li>
						<li><a href="<?= base_url ?>contacto.php">CONTACTO</a></li>
						<li><a href="<?= base_url ?>faq.php">FAQ</a></li>
					</ul>
				</nav>
				<nav class="nav-2">
					<ul>
						<li><a href="<?= base_url ?>usuario.php"><i class="fa-regular fa-circle-user" alt="Iniciar sesion" title="user the milk barcelona"></i></a></li>

						<!-- 	<li>
							<a href="shopping-cart.html">
								<i class="fa-solid fa-cart-arrow-down" alt="carrito the milk Barcelona" title="carrito the milk barcelona">
									
								</i>
							</a>
						</li> -->


						<?php $stats = Utils::statsCarrito(); ?>


						<li><a href="<?= base_url ?>carrito/index"><i class="fa-solid fa-cart-arrow-down" alt="carrito the milk Barcelona" title="carrito the milk barcelona"></i></a></li>

						<li><a href="<?= base_url ?>busqueda.php"><i class="fa-solid fa-magnifying-glass" alt="busqueda the milk Barcelona" title="busqueda the milk barcelona"></i></a></li>
	
					</ul>
				</nav>
			</div>
		</header>





		<div id="content">