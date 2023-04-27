<?php
 include('views/banners/ban_producto.php');
 include('')

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
 <?php else : ?>
 	<h1>El producto no existe</h1>
 <?php endif; ?>



 <div class='container2'>
 	<div class='background-element' id='background-element'>
 	</div>
 	<div class='highlight-window' id='product-img'>
 		<div class='highlight-overlay' id='highlight-overlay'>
 		</div>
 	</div>
 	<section class='window'>
 		<div class='main-content'>
 			<h2>The Milk Barcelona</h2>
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
 					<div class="data description" id='description'>
 						<p class="description"><?= $product->descripcion ?></p>
 						<div class='highlight-window  mobile' id='product-img'>
 							<div class='highlight-overlay' id='highlight-overlay-mobile'>
 							</div>
 						</div>
 						<section class='options'>
 							<div class='color-options'>
 								<h4>Color:</h4>
 								<div class='color-picker'>
 									<div class='color overlay' id='color-overlay'>
 										<div class='check'>
 										</div>
 									</div>
 									<div class='color color-a' id='color-a'>
 									</div>
 									<div class='color color-b' id='color-b'>
 									</div>
 								</div>
 								<span class='small' style='color:#457'>COLOR: <span id='color-name'>BLUES / 2V5</span></span>
 							</div>
 							<section class='size-picker'>
 								<h5>Size:</h5>
 								<div class='range-picker' id='range-picker'>
 									<div>36</div>
 									<div class='active'>38</div>
 									<div>40</div>
 									<div>42</div>
 									<div>22</div>
 								</div>
 								<a class='small align-right' href='#'>VER TABLA DE MEDIDAS</a>
 							</section>
 						</section>

 						<div class='divider'>
 						</div>

 						<div class='purchase-info data'>
 							<div class='price'>
							 <p ><?= $product->precio ?>$</p>
 							</div>
 							<button><a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Añadir al Carrito</a></button>
 						</div>

 			
 					</div>
 				</div>
 			<?php else : ?>
 				<h1>El producto no existe</h1>
 			<?php endif; ?>


 			<!-- <h1>CAMISETA TIRANTES</h1> -->
 			<h3>100% Algodon</h3>
 			<!-- 		<div class='description' id='description'>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias cupiditate harum, quo quod dignissimos cumque cum fuga libero obcaecati dicta sequi nihil numquam laboriosam adipisci. Similique a qui vel officiis?</p>
			</div> -->
 		<!-- 	<div class='highlight-window  mobile' id='product-img'>
 				<div class='highlight-overlay' id='highlight-overlay-mobile'>
 				</div>
 			</div> -->
 			<section class='options'>
 				<div class='color-options'>
 					<h4>Color:</h4>
 					<div class='color-picker'>
 						<div class='color overlay' id='color-overlay'>
 							<div class='check'>
 							</div>
 						</div>
 						<div class='color color-a' id='color-a'>
 						</div>
 						<div class='color color-b' id='color-b'>
 						</div>
 					</div>
 					<span class='small' style='color:#457'>COLOR: <span id='color-name'>BLUES / 2V5</span></span>
 				</div>
 				<section class='size-picker'>
 					<h5>Size:</h5>
 					<div class='range-picker' id='range-picker'>
 						<div>36</div>
 						<div class='active'>38</div>
 						<div>40</div>
 						<div>42</div>
 						<div>22</div>
 					</div>
 					<a class='small align-right' href='#'>VER TABLA DE MEDIDAS</a>
 				</section>
 			</section>
 			<div class='divider'>
 			</div>
 			<div class='purchase-info'>
 				<div class='price'>
 					<p><strong>Precio: </strong><?php echo $producto->precio; ?></p>
 				</div>
 				<button>AÑADIR AL CARRITO</button>
 			</div>
 		</div>
 	</section>
 </div>

 <div class="product">
	<h2><?php echo $producto->nombre; ?></h2>
	<p><?php echo $producto->descripcion; ?></p>
	<p><strong>Precio: </strong><?php echo $producto->precio; ?></p>

	<form action="<?php echo base_url ?>carrito/add" method="POST">
		<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
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

<!-- <script type="module" src="<?= base_url ?>assets/js/shopping-cart.js"></script> -->



/////////////////////


el de GPT:

<?php 
    include('views/banners/ban_producto.php');
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
    
    <div class='container2'>
        <div class='background-element' id='background-element'></div>
        <div class='highlight-window' id='product-img'>
            <div class='highlight-overlay' id='highlight-overlay'></div>
        </div>
        <section class='window'>
            <div class='main-content'>
                <h2>The Milk Barcelona</h2>
                <h1><?= $product->nombre ?></h1>
                <div id="detail-product">
                    <div class="image">
                        <?php if ($product->imagen != null) : ?>
                            <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
                        <?php else : ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" />
                        <?php endif; ?>
                    </div>
                    <div class="data description" id='description'>
                        <p class="description"><?= $product->descripcion ?></p>
                        <div class='highlight-window  mobile' id='product-img'>
                            <div class='highlight-overlay' id='highlight-overlay-mobile'></div>
                        </div>
                        <section class='options'>
                            <div class='color-options'>
                                <h4>Color:</h4>
                                <div class='color-picker'>
                                    <div class='color overlay' id='color-overlay'>
                                        <div class='check'></div>
                                    </div>
                                    <div class='color color-a' id='color-a'></div>
                                    <div class='color color-b' id='color-b'></div>
                                </div>
                                <span class='small' style='color:#457'>COLOR: <span id='color-name'>BLUES / 2V5</span></span>
                            </div>
                            <section class='size-picker'>
                                <h5>Size:</h5>
                                <div class='range-picker' id='range-picker'>
                                    <div>36</div>
                                    <div class='active'>38</div>
                                    <div>40</div>
                                    <div>42</div>
                                    <div>22</div>
                                </div>
                                <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Añadir al Carrito</a>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>
