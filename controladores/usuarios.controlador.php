<?php

class ControladorUsuarios{

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingSeccional"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingSeccional"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				$tabla = "seccionales";
				$item = "id_seccional";
				$valor = $_POST["ingSeccional"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);

				if($respuesta["id_seccional"] == $_POST["ingSeccional"] && $respuesta["password"] == $_POST["ingPassword"]){

					$_SESSION["validarSesion"] = "ok";
					$_SESSION["id_seccional"] = $respuesta["id_seccional"];
					$_SESSION["nom_seccional"] = $respuesta["nom_seccional"];
					$_SESSION["password"] = $respuesta["password"];

					echo '<script>

						window.location = "inicio";

					</script>';
				}else{

					echo '
					<div class="alert alert-danger col-xs-10 col-md-offset-1">
					<center>
					<span class="white-text">Error al ingresar, porfavor selecione una seccional e ingrese la contraseña correctamente.</span>
					</center>
					</div>';

				}


			}

		}

	}

}
