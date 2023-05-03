<!-- <?php
require_once 'models/tallas.php';
require_once 'models/colores.php';
require_once 'models/producto.php';
require_once 'models/categoria.php';
?>
<?php $categorias = Utils::showCategorias(); ?>
<nav id="menu2">
  <ul>
    <?php while ($cat = $categorias->fetch_object()) : ?>
      <li>
        <a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
      </li>
    <?php endwhile; ?>
  </ul>
</nav>
<?php
if (isset($_GET['id'])) {
  $product = new Producto();
  $product->setId($_GET['id']);
  $product = $product->getOne();
}
?>
<?php if (isset($product)) : ?>
  <h1><?= $product->nombre ?></h1>
  <div id="detail-product">
    <div class="image">
      <?php if ($product->imagen != null) : ?>
        <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
      <?php else : ?>
        <img src="<?= base_url ?>assets/img/camiseta.png" />
      <?php endif; ?>
    </div>
    <div class="data">
      <p class="description"><?= $product->descripcion ?></p>
      <p class="price"><?= $product->precio ?>$</p>
      <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Añadir al Carrito</a>
    </div>
  </div>
<?php endif; ?>

<div class="producto">
  <?php if (isset($product)) : ?>
    <h2><?php echo $product->nombre; ?></h2>
    <p><?php echo $product->descripcion; ?></p>
    <p><strong>Precio: </strong><?php echo $product->precio; ?></p>
    <form action="<?php echo base_url ?>carrito/add" method="POST">
      <input type="hidden" name="id" value="<?php echo $product->id; ?>">
      <label for="talla">Talla:</label>
      <select id="talla" name="talla">
        <?php foreach ($tallas as $talla) : ?>
          <option value="<?php echo $talla->id; ?>"><?php echo $talla->nombre; ?></option>
        <?php endforeach; ?>
      </select>
      <label for="color">Color:</label>
      <select id="color" name="color">
        <?php foreach ($colores as $color) : ?>
          <option value="<?php echo $color->id; ?>"><?php echo $color->nombre; ?></option>
        <?php endforeach; ?>
      </select>
      <button type="submit" class="btn btn-success">Agregar a carrito</button>
    </form>
  <?php endif; ?>
</div>

 -->



<!-- /////////////////// ESTE ES EL QUE TNEIA NTES -->
 <?php
      require_once 'models/tallas.php';
      require_once 'models/colores.php';
      require_once 'models/producto.php';
      require_once 'models/categoria.php';
      ?>

<?php $categorias = Utils::showCategorias(); ?>

<nav id="menu2">
	<ul>
		<?php while ($cat = $categorias->fetch_object()) : ?>
			<li>
				<a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
			</li>
		<?php endwhile; ?>
	</ul>
</nav>

<?php if (isset($product)) : ?>
   <h1><?= $product->nombre ?></h1> 
   <div id="detail-product">
        <div class="image">
            <?php if ($product->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
            <?php else : ?>
                <img src="<?= base_url ?>assets/img/camiseta.png" />
            <?php endif; ?>
        </div>
        <div class="data">
            <p class="description"><?= $product->descripcion ?></p>
            <p class="price"><?= $product->precio ?>$</p>
            <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Añadir al Carrito</a>
        </div>
    </div> 
    <?php endif; ?>

<div class="producto">
  <h2><?php echo $product->nombre; ?></h2>
  <p><?php echo $product->descripcion; ?></p>
  <p><strong>Precio: </strong><?php echo $product->precio; ?></p>
  <form action="<?php echo base_url ?>carrito/add" method="POST">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>">
    <label for="talla">Talla:</label>
    <select id="talla" name="talla">
      <?php foreach ($tallas as $talla) : ?>
        <option value="<?php echo $talla->id; ?>"><?php echo $talla->nombre; ?></option>
      <?php endforeach; ?>
    </select>
    <label for="color">Color:</label>
    <select id="color" name="color">
      <?php foreach ($colores as $color) : ?>
        <option value="<?php echo $color->id; ?>"><?php echo $color->nombre; ?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-success">Agregar a carrito</button>
  </form>
</div>


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

