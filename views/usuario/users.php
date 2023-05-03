<div id="user-container">
  <div id="login" class=" login-container">
    <?php if(!isset($_SESSION['identity'])): ?>
      <h3>Entra y llénate de leche fresca 🥛🔥😜</h3>
        <form action="<?=base_url?>usuario/login" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <input type="submit" value="Enviar" />
        </form>
    <?php else: ?>
        <h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
    <?php endif; ?>

    

    <ul>
        <?php if(isset($_SESSION['admin'])): ?>
            <li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
            <li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
            <li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['identity'])): ?>
            <li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
            <li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
        <?php else: ?> 
            <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
        <?php endif; ?> 
    </ul>
</div>

</div>
