<?php

class ControladorPases{

  static public function ctrConsultaPases(){

    $tabla = "pases";
    $tabla2 = "estudiantes";
    $tabla3 = "tipos_pases";
    $item = "id_estudiante";
    $item2 = "id_tipo_pase";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloPases::mdlMostrarPases($tabla, $tabla2, $tabla3, $item, $item2, $seccion);

    return $respuesta;

  }

  static public function ctrConsultaPasesTotal(){

    $tabla = "pases";
    $tabla2 = "estudiantes";
    $item = "id_pase";
    $item2 = "id_estudiante";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloPases::mdlMostrarPasesTotal($tabla, $tabla2, $item, $item2, $seccion);

    return $respuesta;

  }

  static public function ctrRegistrarPase(){

    if(isset($_POST["descripcion"] , $_POST["pase"])){

            $tabla = "pases";

            $item  = "id_tipo_pase";
            $item2 = "descripcion";
            $item3 = "id_estudiante";
            $item4 = "id_seccional";
            $item5 = "fecha";

            $seccion = $_SESSION["id_seccional"];
            $valor = $_POST["pase"];
            $valor2 = $_POST["descripcion"];
            $fecha = $_POST["fecha"];

            foreach($_POST as $campo => $valor3){
              if ($campo != "descripcion" && $campo != "pase")
                $respuesta = ModeloPases::mdlRegistrarPase($tabla, $item, $item2, $item3, $item4, $item5, $seccion, $valor, $valor2, $valor3, $fecha);

                echo '<script>

                        window.location = "consultaPases";

                      </script>';

            }

    }

  }

}
