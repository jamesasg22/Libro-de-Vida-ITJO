<?php

class ControladorRepresentantes{

  static public function ctrConsultaRepresentantes(){

    $tabla = "estudiantes";
    $tabla2 = "representantes";
    $item = "id_representante";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloRepresentantes::mdlMostrarRepresentantes($tabla, $item, $seccion, $tabla2);

    return $respuesta;

  }

}
