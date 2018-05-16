<?php

class ControladorFaltasAcademicas{

  static public function ctrConsultaFaltasAcademicas(){

    $tabla = "relaciones_faltas";
    $tabla2 = "faltas_academicas";
    $tabla3 = "manual_convivencia";
    $tabla4 = "estudiantes";
    $tabla5 = "tipos_faltas";
    $item = "id_falta_academica";
    $item2 = "id_manual_convivencia";
    $item3 = "id_estudiante";
    $item4 = "id_tipo_falta";


    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloFaltasAcademicas::mdlMostrarFaltasAcademicas($tabla, $tabla2, $tabla3, $tabla4, $tabla5, $item, $item2, $item3, $item4, $seccion);

    return $respuesta;

  }

  static public function ctrConsultaFaltasAcademicasDetalles($valor){

    $tabla = "faltas_academicas";
    $tabla2 = "estudiantes";
    $tabla3 = "manual_convivencia";
    $tabla4 = "tipos_faltas";
    $tabla5 = "representantes";
    $tabla6 = "relaciones_faltas";
    $item = "id_estudiante";
    $item2 = "id_manual_convivencia";
    $item3 = "id_tipo_falta";
    $item4 = "id_representante";
    $item5 = "id_falta_academica";

    $respuesta = ModeloFaltasAcademicas::mdlMostrarFaltasAcademicasDetalles($tabla, $tabla2, $tabla3, $tabla4, $tabla5, $tabla6, $item, $item2, $item3, $item4,  $item5, $valor);

    return $respuesta;

  }

  static public function ctrConsultaFaltasAcademicasTotal(){

    $tabla = "relaciones_faltas";
    $tabla2 = "estudiantes";
    $item = "   id_relacion_falta";
    $item2 = "id_estudiante";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloFaltasAcademicas::mdlMostrarFaltasAcademicasTotal($tabla, $tabla2, $item, $item2, $seccion);

    return $respuesta;

  }

  static public function ctrRegistrarFalta(){

        if(isset($_POST["descFalta"] , $_POST["acuerdo"] , $_POST["manual"])){

                $tabla = "faltas_academicas";
                $tabla2 = "relaciones_faltas";

                $item = "id_manual_convivencia";
                $item2 = "descripcion";
                $item3 = "acuerdo";
                $item4 = "id_seccional";
                $item5 = "fecha";

                $item6 = "id_estudiante";
                $item7 = "id_falta_academica";

                $valor =  $_POST["manual"];
                $valor2 = $_POST["descFalta"];
                $valor3 = $_POST["acuerdo"];
                $seccion = $_SESSION["id_seccional"];

                $registrarFalta = ModeloFaltasAcademicas::mdlRegistrarFalta($tabla, $item, $item2, $item3, $item4, $item5, $valor, $valor2, $valor3, $seccion);

                foreach($_POST as $campo => $valor){
                  if($campo != "descFalta" && $campo != "acuerdo" && $campo != "manual"){
                    $relacionFalta = ModeloFaltasAcademicas::mdlRelacionFalta($tabla, $item6, $item7, $tabla2,$valor);

                    echo '<script>

                      window.location = "consultaFaltas";

                    </script>';
                  }

                }

        }

  }

}
