<?php
require_once "conexion.php";

  class ModeloAlumnos{

    static public function mdlMostrarAlumnos($tabla, $item, $seccion){

      if ($seccion == 4){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE curso > 3");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE curso = $seccion");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlMostrarAlumnosTotal($tabla, $item, $seccion){

      if ($seccion == 4){

        $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS counta FROM $tabla WHERE curso > 3");

        $stmt -> execute();

        return $stmt -> fetch();

      }else{

        $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS counta FROM $tabla WHERE curso = $seccion");

        $stmt -> execute();

        return $stmt -> fetch();

      }

      $stmt -> close();

      $stmt = null;

    }
    static public function mdlFiltrarAlumnos($tabla, $item, $cedula){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item LIKE '%".$cedula."%' LIMIT 1");

        $stmt -> execute();

        return $stmt -> fetchAll();


      $stmt -> close();

      $stmt = null;

    }


}
