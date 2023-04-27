<?php

if (!function_exists('sanitize')) {
    function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        return $data;
    }
}

$error = "";
$exito = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $apellido = isset($_REQUEST['apellido']) ? $_REQUEST['apellido'] : "";
    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : "";
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
    $asunto = isset($_REQUEST['asunto']) ? $_REQUEST['asunto'] : "";
    $contenido = isset($_REQUEST['contenido']) ? $_REQUEST['contenido'] : "";

    if (empty($email)) {
        $error .= "Email es un campo obligatorio. <br/>";
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error .= "Correo electrónico no válido.<br/>";
    } else {
        $email = sanitize($email);
    }

    if (empty($apellido)) {
        $error .= "Apellido es un campo obligatorio. <br/>";
    } else {
        $apellido = sanitize($apellido);
    }
    if (empty($nombre)) {
        $error .= "Nombre es un campo obligatorio. <br/>";
    } else {
        $nombre = sanitize($nombre);
    }

    if (empty($asunto)) {
        $error .= "Asunto es un campo obligatorio. <br/>";
    } else if (strlen($asunto) < 2 || strlen($asunto) > 40) {
        $error .= "Asunto no se ajusta al largo necesario.<br/>";
    } else {
        $asunto = sanitize($asunto);
    }

    if (empty($contenido)) {
        $error .= "Nos interesa el contenido de tu mensaje y es un campo obligatorio. <br/>";
    } else if (strlen($contenido) < 10 || strlen($contenido) > 200) {
        $error .= "Ajusta tu mensaje a un máximo de 200 caracteres.<br/>";
    } else {
        $contenido = sanitize($contenido);
    }

if ($error != "") {
    $error = '<div class="alert alert-danger" role="alert">TENEMOS ERRORES EN NUESTRO FORMULARIO!<br/>' . $error . '</div>';
    presento_feedback($error, $exito);
    presento_form($apellido, $nombre, $email, $asunto, $contenido);
} else {
    $to       = "francis.pama@hotmail.com";
    $headers  = 'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8' . "\r\n" .
        'From: Consulta enviada desde nuestra web por' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

    $emilio = mail($to,  $asunto, $contenido, $headers);
    if ($emilio) {
        $exito = '<div class="success alert-success" role="">Correo enviado CORRECTAMENTE!<br/></div>';
        presento_feedback("", $exito);
        presento_form("", "", "", "", "");
    } else {
        $error = '<div class="alert alert-danger" role="alert">NO HEMOS PODIDO ENVIAR EL CORREO!<br/></div>';
        presento_feedback($error, $exito);
        presento_form($apellido, $nombre, $email, $asunto, $contenido);
    }
}

} else {
    presento_feedback("", "");
    presento_form("", "", "", "","");
}
