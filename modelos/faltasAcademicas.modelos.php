<?php

require_once "conexion.php";

  class ModeloFaltasAcademicas{

    static public function mdlMostrarFaltasAcademicas($tabla, $tabla2, $tabla3, $tabla4, $tabla5, $item, $item2, $item3, $item4, $seccion){

      if ($seccion == 4){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item INNER JOIN $tabla3 ON $tabla2.$item2 = $tabla3.$item2 INNER JOIN $tabla4 ON $tabla.$item3 = $tabla4.$item3 INNER JOIN $tabla5 ON $tabla3.$item4 = $tabla5.$item4 WHERE curso > 3");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item INNER JOIN $tabla3 ON $tabla2.$item2 = $tabla3.$item2 INNER JOIN $tabla4 ON $tabla.$item3 = $tabla4.$item3 INNER JOIN $tabla5 ON $tabla3.$item4 = $tabla5.$item4 WHERE curso = $seccion");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlMostrarFaltasAcademicasDetalles($tabla, $tabla2, $tabla3, $tabla4, $tabla5, $tabla6, $item, $item2, $item3, $item4,  $item5, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla6 INNER JOIN $tabla2 ON $tabla6.$item = $tabla2.$item INNER JOIN $tabla ON $tabla6.$item5 = $tabla.$item5 INNER JOIN $tabla3 ON $tabla.$item2 = $tabla3.$item2 INNER JOIN $tabla4 ON $tabla3.$item3 = $tabla4.$item3 LEFT JOIN $tabla5 ON $tabla2.$item4 = $tabla5.$item4 WHERE $tabla.$item5 = $valor");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt = null;


}

static public function mdlMostrarFaltasAcademicasTotal($tabla, $tabla2, $item, $item2, $seccion){

    if ($seccion == 4){

      $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS countf FROM $tabla INNER JOIN $tabla2 ON $tabla.$item2 = $tabla2.$item2 WHERE curso > 3");

      $stmt -> execute();

      return $stmt -> fetch();

    }else{

      $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS countf FROM $tabla INNER JOIN $tabla2 ON $tabla.$item2 = $tabla2.$item2 WHERE curso = $seccion");

      $stmt -> execute();

      return $stmt -> fetch();

    }

    $stmt -> close();

    $stmt = null;

  }

  static public function mdlRegistrarFalta($tabla, $item, $item2, $item3, $item4, $item5, $valor, $valor2, $valor3, $seccion){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ($item, $item2, $item3, $item4, $item5) VALUES ( $valor, '$valor2', '$valor3', $seccion, CURRENT_TIMESTAMP ) ");

      $stmt -> execute();


  }
  static public function mdlRelacionFalta($tabla, $item6, $item7, $tabla2, $idEstudiante){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla2 ( $item6, $item7 ) VALUES ($idEstudiante,(SELECT MAX(id_falta_academica) FROM $tabla))");

      $stmt -> execute();


  }

}
