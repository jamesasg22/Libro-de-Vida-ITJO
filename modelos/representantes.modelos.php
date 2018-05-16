<?php

require_once "conexion.php";

  class ModeloRepresentantes{

    static public function mdlMostrarRepresentantes($tabla, $item, $seccion, $tabla2){

      if ($seccion == 4){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item WHERE curso > 3");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item WHERE curso = $seccion");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }

      $stmt -> close();

      $stmt = null;

    }

}
