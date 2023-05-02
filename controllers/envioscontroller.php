<?php
// Define las fechas estimadas de entrega para cada país y método de envío en un archivo de configuración
$fechas_entrega = parse_ini_file('fechas_entrega.ini', true);

// Define las opciones de país y método de envío
$paises = array(
    'Spain' => 'Spain',
    'United States' => 'United States',
    'United Kingdom' => 'United Kingdom',
    'Canada' => 'Canada',
    'France' => 'France',
    'Germany' => 'Germany',
    'Italy' => 'Italy',
    'Japan' => 'Japan',
    'Mexico' => 'Mexico',
    'Brazil' => 'Brazil',
    'Australia' => 'Australia',
    'China' => 'China',
    'South Korea' => 'South Korea',
    'Netherlands' => 'Netherlands',
    'Switzerland' => 'Switzerland',
    'Sweden' => 'Sweden',
    'Norway' => 'Norway',
    'Denmark' => 'Denmark',
    'Finland' => 'Finland',
    'Belgium' => 'Belgium',
    'Austria' => 'Austria',
    'Portugal' => 'Portugal',
    'Greece' => 'Greece',
    'Ireland' => 'Ireland',
    'New Zealand' => 'New Zealand'
);


$precios = array(
    'Spain' => array(
        'economico' => 5.99,
        'expreso' => 10.99
    ),
    'United States' => array(
        'economico' => 7.99,
        'expreso' => 12.99
    ),
    'United Kingdom' => array(
        'economico' => 6.99,
        'expreso' => 11.99
    ),
    'Canada' => array(
        'economico' => 8.99,
        'expreso' => 13.99
    ),
    'France' => array(
        'economico' => 5.99,
        'expreso' => 10.99
    ),
    'Germany' => array(
        'economico' => 6.99,
        'expreso' => 11.99
    ),
    'Italy' => array(
        'economico' => 7.99,
        'expreso' => 12.99
    ),
    'Japan' => array(
        'economico' => 9.99,
        'expreso' => 14.99
    ),
    'Mexico' => array(
        'economico' => 4.99,
        'expreso' => 9.99
    ),
    'Brazil' => array(
        'economico' => 6.99,
        'expreso' => 11.99
    ),
    'Australia' => array(
        'economico' => 10.99,
        'expreso' => 15.99
    ),
    'China' => array(
        'economico' => 8.99,
        'expreso' => 13.99
    ),
    'South Korea' => array(
        'economico' => 8.99,
        'expreso' => 13.99
    ),
    'Netherlands' => array(
        'economico' => 6.99,
        'expreso' => 11.99
    ),
    'Switzerland' => array(
        'economico' => 8.99,
        'expreso' => 13.99
    ),
    'Sweden' => array(
        'economico' => 7.99,
        'expreso' => 12.99
    ),
    'Norway' => array(
        'economico' => 8.99,
        'expreso' => 13.99
    ),
    'Denmark' => array(
        'economico' => 6.99,
        'expreso' => 11.99
    ),
    'Finland' => array(
        'economico' => 7.99,
        'expreso' => 12.99
    ),
    'Belgium' => array(
        'economico' => 6.99,
        'expreso' => 11.99
    ),
    'Austria' => array(
        'economico' => 8.99,
        'expreso' => 13.99
    ),
    'Portugal' => array(
        'economico' => 5.99,
        'expreso' => 10.99
    ),
    'Greece' => array(
        'economico' => 7.99,
        'expreso' => 12.99
    ),
    'Ireland' => array(
        'economico' =>

        6.99,
        'expreso' => 11.99
    ),
    'New Zealand' => array(
        'economico' => 9.99,
        'expreso' => 14.99
    )
);



$envios = array(
    'economico' => 'Envío económico',
    'expreso' => 'Envío exprés',
);

// Si se ha enviado el formulario, procesa los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valida los datos enviados
    $errors = array();

    if (empty($_POST['pais']) || !isset($paises[$_POST['pais']])) {
        $errors[] = 'Debes seleccionar un país válido.';
    }

    if (empty($_POST['envio']) || !isset($envios[$_POST['envio']])) {
        $errors[] = 'Debes seleccionar un método de envío válido.';
    }

    if (count($errors) === 0) {
        // Obtiene los datos del formulario
        $pais = $_POST['pais'];
        $envio = $_POST['envio'];

        // Obtiene las fechas de entrega y precios para el país y método de envío seleccionados
        $fecha_entrega = $fechas_entrega[$pais][$envio];
        $precio = $precios[$pais][$envio];

        // Muestra la información de envío
        echo '<p>El envío a ' . $pais . ' por ' . $envios[$envio] . ' llegará en ' . $fecha_entrega . ' días y cuesta €' . $precio . '€</p>';
    }
}
?>