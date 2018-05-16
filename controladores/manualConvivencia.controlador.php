<?php

class ControladorManualConvivencia{

  static public function ctrConsultaManualConvivencia(){

    $tabla = "manual_convivencia";
    $tabla2 = "tipos_faltas";
    $item = "id_tipo_falta";

    $respuesta = ModeloManualConvivencia::mdlMostrarManualConvivencia($tabla, $tabla2, $item);

    return $respuesta;

  }

}
