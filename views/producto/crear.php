<?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>
	<h1>Editar producto <?= $pro->nombre ?></h1>
	<?php $url_action = base_url . "producto/save&id=" . $pro->id; ?>

<?php else : ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url . "producto/save"; ?>
<?php endif; ?>

<div class="form_container">

	<form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" />

		<label for="descripcion">Descripción</label>
		<textarea name="descripcion"><?= isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

		<label for="descripcioncorta">Descripción corta</label>
		<textarea name="descripcioncorta"><?= isset($pro) && is_object($pro) ? $pro->descripcion_corta : ''; ?></textarea>

		<label for="precio">Precio</label>
		<input type="text" name="precio" value="<?= isset($pro) && is_object($pro) ? $pro->precio : ''; ?>" />

		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''; ?>" />

		<label for="color">Color</label>
		<?php $color_sel = Utils::showColor(); ?>
		<select name="color">
			<?php while ($cat = $color_sel->fetch_object()) : ?>
				<option value="<?= $cat->id ?>" <?= (isset($pro) && is_object($pro) && isset($pro->color) && $pro->color == $cat->id) ? 'selected' : '' ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>
<!-- 
		<label for="color">Color</label>
		<?php $color_sel = Utils::showColor(); ?>
		<select name="color">
			<?php while ($cat = $color_sel->fetch_object()) : ?>
				<option value="<?= $cat->id ?>" <?= (isset($pro) && is_object($pro) && $pro->color == $cat->id) ? 'selected' : '' ?>>
					<?= $cat->nombre ?>
				</option>

			<?php endwhile; ?>
		</select> -->

		<!-- 		<label for="color">color</label>
		<input type="text" name="color" value="<?= isset($pro) && is_object($pro) ? $pro->color : ''; ?>" /> -->

		<!-- 	<label for="bordado">bordado</label>
		<input type="text" name="bordado" value="<?= isset($pro) && is_object($pro) ? $pro->bordado : ''; ?>" /> -->

		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select name="categoria">
			<?php while ($cat = $categorias->fetch_object()) : ?>
				<option value="<?= $cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>

		<label for="talla">Talla</label>
		<?php $tallas_sel = Utils::showTallas(); ?>
		<select name="talla">
			<?php while ($cat = $tallas_sel->fetch_object()) : ?>
				<option value="<?= $cat->id ?>" <?= (isset($pro) && is_object($pro) && isset($pro->talla) && $pro->talla == $cat->id) ? 'selected' : '' ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>

		<!-- 		<label for="talla">Talla</label>
		<?php $tallas_sel = Utils::showTallas(); ?>
		<select name="talla">
			<?php while ($cat = $tallas_sel->fetch_object()) : ?>
				<option value="<?= $cat->id ?>" <?= (isset($pro) && is_object($pro) && $pro->talla == $cat->id) ? 'selected' : '' ?>>
					<?= $cat->nombre ?>
				</option>

			<?php endwhile; ?>
		</select> -->

		<label for="imagen">Imagen</label>
		<?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)) : ?>
			<img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" class="thumb" />
		<?php endif; ?>
		<input type="file" name="imagen" />

		<input type="submit" value="Guardar" />
	</form>
</div>