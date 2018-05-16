<?php

class ControladorAlumnos{

  static public function ctrConsultaAlumnos(){

    $tabla = "estudiantes";
    $item = "id_estudiante";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloAlumnos::mdlMostrarAlumnos($tabla, $item, $seccion);

    return $respuesta;

  }

  static public function ctrConsultaAlumnosTotal(){

    $tabla = "estudiantes";
    $item = "id_estudiante";
    $seccion = $_SESSION["id_seccional"];

    $respuesta = ModeloAlumnos::mdlMostrarAlumnosTotal($tabla, $item, $seccion);

    return $respuesta;

  }

  static public function ctrFiltrarAlumnos($cedula){

    $tabla = "estudiantes";
    $item = "e_cedula";

    $respuesta = ModeloAlumnos::mdlFiltrarAlumnos($tabla, $item, $cedula);

    return $respuesta;

  }


}
