<?php
require_once 'models/faqs_model.php';

?>
<div class="container-faq">
  <h1>Preguntas frecuentes</h1>
  <p>Sabemos lo importante que es para ti recibir información precisa y rápida y que no estás para perder el tiempo. Es por esto, que nos apasiona entregarte la mejor experiencia en nuestro sitio web y con nuestro servicio al cliente. Si no puedes encontrar las respuestas que necesitas en esta sección, por favor envíanos un email a info@themilkbarcelona.com. Estaremos felices de ayudarte de la mejor forma.</p>

  <form action="" method="get">
    <input type="text" name="q" placeholder="Buscar en FAQ...">
    <input type="submit" value="Buscar">
  </form>

  <?php foreach ($faqs as $faq) { ?>
    <button class="accordion"><?php echo $faq['question']; ?></button>
    <div class="panel">
      <p><?php echo $faq['answer']; ?></p>
    </div>
  <?php } ?>

  <button class="accordion">¿Qué tipo de ropa y productos ofrecéis? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Ofrecemos ropa fresca, juvenil, atrevida y con el doble sentido de la leche. Nuestra marca es pública y se dirige a la comunidad LGTBIQ+.</p>
  </div>
  <button class="accordion">¿Dónde puedo comprar vuestros productos? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Puedes comprar nuestros productos a través de nuestra página web, www.themilkbarcelona.com. También puedes visitar nuestra tienda física en Barcelona.</p>
  </div>
  <button class="accordion">¿Cómo puedo elegir mi talla? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>En nuestra página web, puedes consultar la guía de tallas que aparece en la descripción de cada producto. Si tienes alguna duda, no dudes en contactar con nosotros.</p>
  </div>
  <button class="accordion">¿Cómo puedo cuidar mis prendas? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Para asegurar una vida larga de tus prendas, te recomendamos seguir las instrucciones de cuidado indicadas en la etiqueta de cada prenda.</p>
  </div>
  <button class="accordion">¿Cómo puedo hacer un pedido en línea? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Para hacer un pedido en línea, simplemente selecciona el producto que deseas, elige la talla y añádelo a tu carrito de compras. Luego, sigue las instrucciones para completar la compra.</p>
  </div>
  <button class="accordion">¿Cuáles son las opciones de envío? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Ofrecemos envío estándar y envío exprés. Los tiempos y precios varían según la zona geográfica. Consulta nuestra página de envíos para más información.</p>
  </div>
  <button class="accordion">¿Cuáles son las formas de pago disponibles? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Aceptamos tarjetas de crédito y débito, PayPal y transferencias bancarias. Puedes seleccionar la forma de pago al finalizar tu compra.</p>
  </div>
  <button class="accordion">¿Cuál es vuestra política de devoluciones? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Aceptamos devoluciones dentro de los 14 días posteriores a la compra, siempre y cuando las prendas no hayan sido usadas o dañadas. Consulta nuestra página de devoluciones para más información.</p>
  </div>
  <button class="accordion">¿Puedo cambiar un producto por otro?</button>
  <div class="panel">
    <p>Sí, puedes cambiar un producto por otro siempre y cuando esté en perfectas condiciones y dentro del plazo de devolución.</p>
  </div>
  <button class="accordion">¿Quién paga los gastos de envío en caso de una devolución o cambio? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Los gastos de envío correrán a cargo del cliente, a menos que el motivo de la devolución o cambio sea un error por parte de The Milk Barcelona (por ejemplo, envío de un producto incorrecto o defectuoso). En este caso, The Milk Barcelona se hará cargo de los gastos de envío.</p>
  </div>
  <button class="accordion">ACTUALIZACIONES DE ENVÍO - COVID 19: <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>En estos momentos, estamos experimentando algunos retrasos en los envíos debido a la pandemia de COVID-19. Por favor, ten paciencia mientras trabajamos para entregarte tus productos lo más rápido posible.</p>
  </div>
  <button class="accordion">¿Cómo puedo rastrear mi pedido? - Australia <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de seguimiento y el enlace correspondiente para rastrear tu pedido en la página web del transportista.</p>
  </div>
  <button class="accordion">Gastos en derechos de importación e impuestos <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Los gastos en derechos de importación e impuestos varían según el país de destino y son responsabilidad del

      cliente. The Milk Barcelona no se hace responsable de estos gastos y recomendamos que te informes sobre los costos adicionales antes de realizar tu compra.</p>
  </div>
  <button class="accordion">Métodos de envío internacional <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <a href="#">Correo urgente</a>
    <a href="#">Correo prioritario</a>
    <a href="#">Correo económico</a>
    <p>Por favor, consulta nuestra página de envíos para obtener más información.</p>
  </div>
  <button class="accordion">¿Dónde está mi pedido? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de seguimiento y el enlace correspondiente para rastrear tu pedido en la página web del transportista.</p>
  </div>
  <button class="accordion">¿Puedo ver el estado de mi pedido? <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Sí, puedes ver el estado de tu pedido en tu cuenta personal en nuestra página web.</p>
  </div>
  <button class="accordion">¿Cómo puedo rastrear mi pedido? - EE. UU. <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de seguimiento y el enlace correspondiente para rastrear tu pedido en la página web del transportista.</p>
  </div>
  <button class="accordion">¿Cómo puedo rastrear mi pedido? - Envío urgente prioritario <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de seguimiento y el enlace correspondiente para rastrear tu pedido en la página web del transportista.</p>
  </div>
  <button class="accordion">¿Cómo puedo rastrear mi pedido? - Economía internacional [Europa, Nueva Zelanda, y EE. UU.] <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de seguimiento y el enlace correspondiente para rastrear tu pedido en la página web del transportista.</p>
  </div>
  <button class="accordion">¿Cómo puedo rastrear mi pedido? - Economía Internacional <i class="fa fa-caret-down"></i></button>
  <div class="panel">
    <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con el número de seguimiento y el enlace correspondiente para rastrear tu pedido en la página web del transportista.</p>
  </div>
</div>