<?php
include('views/banners/ban_inicio.php');
require_once('views/producto/carrousel.php');
?> 
<section class="cont-hecho">
    <h2>ORGULLOSAMENTE HECHO EN <strong>BARCELONA</strong> </h2>
</section>
<h1>Algunos de nuestros productos</h1>
<div class="fotos-cont">
<?php while ($product = $productos->fetch_object()) : ?>
	
		<figure class="art-fotos">
			<div class="image">
				<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
					<?php if ($product->imagen != null) : ?>
						<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
					<?php else : ?>
						<img src="<?= base_url ?>assets/img/collar-trochus.jpg" />
					<?php endif; ?>
				</a>
				<div class="icons">
					<!-- <a href="#"><i class="fa-regular fa-star"></i></a> -->
					<a href="#"> <i class="fa-solid fa-share-nodes"></i></a>
					<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>"> <i class="fa-solid fa-magnifying-glass"></i></a>
				</div>
				<a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="add-to-cart">Añade al Carrito</a>
			</div>
			<figcaption>
				<h2><?= $product->nombre ?></h2>
				<!-- <h3> <a href="#">Blanco</a> / <a href="#">Gris</a> </h3> -->
				<!-- <p>Crop top con franja central transparente Suave Tacto, resistente combinación de viscosa y spandex
                super cómoda y ceñida dándole un Secado rápido y Transpirable en todo momento .</p> -->
				<p class="price"><?= $product->precio?>€</p>
			</figcaption>
		</figure>
	
<?php endwhile; ?>
</div>