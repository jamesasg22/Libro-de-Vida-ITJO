<?php

require_once "conexion.php";

  class ModeloJustificativos{

    static public function mdlMostrarJustificativos($tabla, $tabla2, $tabla3, $item, $item2, $seccion){

      if ($seccion == 4){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item INNER JOIN $tabla3 ON $tabla.$item2 = $tabla3.$item2 WHERE curso > 3");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item INNER JOIN $tabla3 ON $tabla.$item2 = $tabla3.$item2 WHERE curso = $seccion");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlMostrarJustificativosTotal($tabla, $tabla2, $item, $item2, $seccion){

      if ($seccion == 4){

        $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS countj FROM $tabla INNER JOIN $tabla2 ON $tabla.$item2 = $tabla2.$item2 WHERE curso > 3");

        $stmt -> execute();

        return $stmt -> fetch();

      }else{

        $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS countj FROM $tabla INNER JOIN $tabla2 ON $tabla.$item2 = $tabla2.$item2 WHERE curso = $seccion");

        $stmt -> execute();

        return $stmt -> fetch();

      }

      $stmt -> close();

      $stmt = null;

    }
    static public function mdlRegistrarJustificativo($tabla, $item, $item2, $item3, $item4, $item5, $seccion, $valor, $valor2, $valor3, $fecha){

          $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( $item, $item2, $item3, $item4, $item5) VALUES ($valor,'$valor2',$valor3,$seccion,'$fecha')");

          $stmt -> execute();

      }

}
