<?php

require_once "conexion.php";

  class ModeloManualConvivencia{

    static public function mdlMostrarManualConvivencia($tabla, $tabla2, $item){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN $tabla2 ON $tabla.$item = $tabla2.$item");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt = null;

    }

}
