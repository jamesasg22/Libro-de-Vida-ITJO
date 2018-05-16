<?php
require_once '../controladores/alumnos.controlador.php';
require_once '../modelos/alumnos.modelos.php';

/**
 * Traer los alumnos en tiempo real
 */
class AjaxAlumnos {

	public $datosAlumnos;

	function ajaxDatosAlumnos()
	{
			$datos = $this -> datosAlumnos;

			$respuesta = ControladorAlumnos:: ctrFiltrarAlumnos($datos);
			if(empty($respuesta))
				echo '<p>No se encontraron resultados</p>';
			else {

					echo '	<table class="table" id="tabla1">
										<thead>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>Cedula</th>
												<th>Curso</th>
												<th>Seleccionar</th>
										</thead>
									<tbody>
								 ';

				foreach ($respuesta as $key => $value) :
					echo '<tr>
										<td>'.$value['e_nombres'].'</td>
										<td>'.$value['e_apellidos'].'</td>
										<td>'.$value['e_cedula'].'</td>
										<td>'.$value['curso'].' - '.$value['seccion'].' - '.$value['num'].'</td>
										<td> <input type="checkbox" /> </td>
										<td><input type="hidden" name="codigo'.$value['id_estudiante'].'" value="'.$value['id_estudiante'].'"></td>
								</tr>';

				endforeach;


				echo '
						</tbody>
					</table>';

		}
	}
}


if(isset($_POST['cedula'])){
	$alumnos = new AjaxAlumnos();
	$alumnos -> datosAlumnos = $_POST['cedula'];
	$alumnos -> ajaxDatosAlumnos();
}
?>
<script>

$(document).ready(function(){

	$('input[type=checkbox]').click(function() {
		if($(this).is(":checked"))

		{
			// el checkbox esta marcado

			// movemos la columna a la tabla2

			var tr=$(this).parents("tr").appendTo("#tabla2 tbody");

			$('thead#th2').empty();
			$('thead#th2').append('<label>Alumnos Seleccionados</label>');

		}else{

			// el checkbox esta desmarcado

			// movemos la columna a la tabla1

			var tr=$(this).parents("tr").appendTo("#tabla1 tbody");


				if($('tbody#t2').html() == 0)
					$('thead#th2').empty();

			if(tr.length == 0)
				var tr=$(this).parents("tr").remove("tr")
		}
	});

});

</script>
