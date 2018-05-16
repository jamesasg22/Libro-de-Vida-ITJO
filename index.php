<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/core.php";
require_once "controladores/rutas.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/alumnos.controlador.php";
require_once "controladores/manualConvivencia.controlador.php";
require_once "controladores/representantes.controlador.php";
require_once "controladores/pases.controlador.php";
require_once "controladores/justificativos.controlador.php";
require_once "controladores/faltasAcademicas.controlador.php";

require_once "modelos/usuarios.modelos.php";
require_once "modelos/alumnos.modelos.php";
require_once "modelos/manualConvivencia.modelos.php";
require_once "modelos/representantes.modelos.php";
require_once "modelos/pases.modelos.php";
require_once "modelos/justificativos.modelos.php";
require_once "modelos/faltasAcademicas.modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();

?>
