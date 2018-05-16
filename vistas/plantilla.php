<?php

			$url = Ruta::ctrRuta();

			session_start();

			if(isset($_SESSION["validarSesion"]) == "ok"){

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<?php include "modulos/head.php";  ?>

<body class="theme-red">

	<div class="page-loader-wrapper">
			<div class="loader">
					<div class="preloader">
							<div class="spinner-layer pl-red">
									<div class="circle-clipper left">
											<div class="circle"></div>
									</div>
									<div class="circle-clipper right">
											<div class="circle"></div>
									</div>
							</div>
					</div>
					<p>Espere...</p>
			</div>
	</div>


	<div class="overlay"></div>


<?php
					/*SUPERIOR*/
					include "modulos/nav.php";

					/*LATERAL*/
					include "modulos/menu.php";
?>

					<section class="content">
					 	<div class="container-fluid">

<?php
					/*RESUMEN*/
					include "modulos/resumen.php";

					/*CONTENIDO*/
					$rutas = array();

			     if(isset($_GET["ruta"])){

						 $rutas = explode("/", $_GET["ruta"]);

						 if($rutas[0] == "inicio"){

							 include "modulos/inicio.php";

						 }else if($rutas[0] == "consultaFaltas"){

							 include "modulos/consultaFaltas.php";

						 }else if($rutas[0] == "detalles"){

							 include "modulos/detalles.php";

						 }else if($rutas[0] == "consultaPases"){

							 include "modulos/consultaPases.php";

						 }else if($rutas[0] == "consultaJustificativos"){

							 include "modulos/consultaJustificativos.php";

						 }else if($rutas[0] == "consultaFaltas"){

							 include "modulos/consultaFaltas.php";

						 }else if($rutas[0] == "consultaAlumnos"){

							 include "modulos/consultaAlumnos.php";

						 }else if($rutas[0] == "consultaRepresentantes"){

							 include "modulos/consultaRepresentantes.php";

						 }else if($rutas[0] == "manualDeConvivencia"){

							 include "modulos/manualDeConvivencia.php";

						 }else if($rutas[0] == "registrarFalta"){

							 include "modulos/registrarFalta.php";

						 }else if($rutas[0] == "registrarPases"){

							 include "modulos/registrarPases.php";

						 }else if($rutas[0] == "registrarJustificativos"){

							 include "modulos/registrarJustificativos.php";

						 }else if($rutas[0] == "informacion"){

							 include "modulos/informacion.php";

						 }else if($rutas[0] == "salir"){

							 include "modulos/salir.php";

						 }else{

							 include "modulos/404.php";

						 }

			        }

?>

		</div>
	</section>

					 <?php include "modulos/footer.php"; ?>

</body>
</html>

<?php
			 }else{

			  include "modulos/login.php";

			 }

?>
