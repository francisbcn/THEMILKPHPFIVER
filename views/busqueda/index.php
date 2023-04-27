<h1>Buscador de productos</h1>


<?php if (!empty($productos)): ?>
    <ul>
    <?php foreach ($productos as $producto): ?>
        <li>
            <h2><?= $producto['nombre'] ?></h2>
            <p><?= $producto['descripcion'] ?></p>
            <p>Precio: $<?= $producto['precio'] ?></p>
        </li>
    <?php endforeach ?>
    </ul>
<?php else: ?>
    <p>No se encontraron productos.</p>
<?php endif ?>
