<?php
// preguntas y respuestas
$faqs = array(
  array(
    "question" => "¿Cómo puedo resetear mi contraseña?",
    "answer" => "Para resetear tu contraseña, sigue los siguientes pasos..."
  ),
  array(
    "question" => "¿Cuál es el horario de atención?",
    "answer" => "Nuestro horario de atención es de lunes a viernes de 9am a 5pm."
  ),
  array(
	"question" => "¿Qué tipo de ropa y productos ofrecéis?",
	"answer" => "Ofrecemos ropa fresca, juvenil, atrevida y con el doble sentido de la leche. Nuestra marca es pública y se dirige a la comunidad LGTBIQ+."
),
array(
	"question" => "¿Dónde puedo comprar vuestros productos?",
	"answer" => "Puedes comprar nuestros productos a través de nuestra página web, www.themilkbarcelona.com. También puedes visitar nuestra tienda física en Barcelona."
),
array(
	"question" => "¿Cómo puedo elegir mi talla?",
	"answer" => "En nuestra página web, puedes consultar la guía de tallas que aparece en la descripción de cada producto. Si tienes alguna duda, no dudes en contactar con nosotros."
),
array(
	"question" => "¿Cómo puedo cuidar mis prendas?",
	"answer" => "Para asegurar una vida larga de tus prendas, te recomendamos seguir las instrucciones de cuidado indicadas en la etiqueta de cada prenda."
),
array(
	"question" => "¿Cómo puedo hacer un pedido en línea?",
	"answer" => "Para hacer un pedido en línea, simplemente selecciona el producto que deseas, elige la talla y añádelo a tu carrito de compras. Luego, sigue las instrucciones para completar la compra."
),
array(
	"question" => "¿Cuáles son las opciones de envío?",
	"answer" => "Ofrecemos envío estándar y envío exprés. Los tiempos y precios varían según la zona geográfica. Consulta nuestra página de envíos para más información."
),
array(
	"question" => "¿Cuáles son las formas de pago disponibles?",
	"answer" => "Aceptamos tarjetas de crédito y débito, PayPal y transferencias bancarias. Puedes seleccionar la forma de pago al finalizar tu compra."
),
array(
	"question" => "¿Cuál es vuestra política de devoluciones?",
	"answer" => "Aceptamos devoluciones dentro de los 14 días posteriores a la compra, siempre y cuando las prendas no hayan sido usadas o dañadas. Consulta nuestra página de devoluciones para más información."
),
array(
	"question" => "¿Puedo cambiar un producto por otro?",
	"answer" => "Sí, puedes cambiar un producto por otro siempre y cuando esté en perfectas condiciones y dentro del plazo de devolución."
),
array(
	"question" => "¿Quién paga los gastos de envío en caso de una devolución o cambio?",
	"answer" => "Los gastos de envío correrán a cargo del cliente, a menos que el motivo de la devolución o cambio sea un error por parte de The Milk Barcelona (por ejemplo, envío de un producto incorrecto o defectuoso). En este caso, The Milk Barcelona se hará cargo de los gastos de envío."
)
);

/* function search_faqs($q) {
	global $db;
	$query = "SELECT * FROM faqs WHERE question LIKE '%$q%' OR answer LIKE '%$q%'";
	$result = $db->query($query);
	return $result->fetchAll();
  } */
  

  if (isset($_GET['q']) && !empty($_GET['q'])) {
	$q = $_GET['q'];
	// filtrar las preguntas que contengan el término de búsqueda
	$faqs = array_filter($faqs, function($faq) use ($q) {
	  return strpos(strtolower($faq['question']), strtolower($q)) !== false;
	});
  }
  
  
?>
