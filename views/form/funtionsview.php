<?php
function presento_feedback($error,$exito){
    $params = [
        "error" => $error,
        "exito" => $exito,

    ];
    montaViews($params, "views/form/feedback.tpl");
}

function presento_form($apellido, $nombre, $email,$asunto, $contenido ){
    $params = [
      "apellido" => $apellido,
      "nombre" => $nombre,
        "email" => $email,
        "asunto" => $asunto,
        "contenido" => $contenido,

    ];
    montaViews($params, "views/form/form.tpl");
}

function montaViews($params,$archivo){
  $html = file_get_contents ($archivo);

  foreach($params as $key => $value){
    $html = str_replace("{{::$key::}}", $value, $html);

  }
  echo $html;
}