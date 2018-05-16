<?php

class ControladorJustificativos{

  static public function ctrConsultaJustificativos(){

    $tabla = "justificativos";
    $tabla2 = "estudiantes";
    $tabla3 = "tipos_justificativos";
    $item = "id_estudiante";
    $item2 = "id_tipo_justificativo";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloJustificativos::mdlMostrarJustificativos($tabla, $tabla2, $tabla3, $item, $item2, $seccion);

    return $respuesta;

  }

  static public function ctrConsultaJustificativosTotal(){

    $tabla = "justificativos";
    $tabla2 = "estudiantes";
    $item = "id_justificativo";
    $item2 = "id_estudiante";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloJustificativos::mdlMostrarJustificativosTotal($tabla, $tabla2, $item, $item2, $seccion);

    return $respuesta;

  }

  static public function ctrRegistrarJustificativo(){
    if(isset($_POST["descripcion"] , $_POST["justificativo"])){

            $tabla = "justificativos";

            $item = "id_tipo_justificativo";
            $item2 = "descripcion";
            $item3 = "id_estudiante";
            $item4 = "id_seccional";
            $item5 = "fecha";

            $seccion = $_SESSION["id_seccional"];
            $valor = $_POST["justificativo"];
            $valor2 = $_POST["descripcion"];
            $fecha = $_POST["fecha"];

            foreach($_POST as $campo => $valor3){
              if ($campo != "descripcion" && $campo != "justificativo")
                $respuesta = ModeloJustificativos::mdlRegistrarJustificativo($tabla, $item, $item2, $item3, $item4, $item5, $seccion, $valor, $valor2, $valor3, $fecha);

              echo '<script>

                      window.location = "consultaJustificativos";

                    </script>';

            }

    }
  }

}
