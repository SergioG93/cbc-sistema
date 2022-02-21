<?php

class ControladorAsignacionDatos{

    /*=============================================
	MOSTRAR ALUMNOS COLEGIOBC
	=============================================*/

	static public function ctrMostrarAsignacion($item, $valor){

		$tabla = "colegiobc";

		$respuesta = ModeloAsignacionDatos::mdlMostrarAsignacion($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR ASIGNACION
	=============================================*/

	static public function ctrEditarAsignacion(){

		if(isset($_POST["editarGrupo"])){


				  $tabla = "colegiobc";

				  $datos = array("Id"=>$_POST["idAsignacion"],
				                "Apellido_Materno"=>$_POST["editarAMaterno"],
				 				"Apellido_Paterno"=>$_POST["editarAPaterno"],
				  				"Nombres"=>$_POST["editarNombre"],
				                 "Grupo"=>$_POST["editarGrupo"],
								 "Grado"=>$_POST["editarGrado"],
								 "Estatus"=>$_POST["editarEstatus"],
								 "genero"=>$_POST["editargenero"],
								 "Curp"=>$_POST["editarCurp"],
							 "Nivel"=>$_POST["editarNivel"]);

				  $respuesta = ModeloAsignacionDatos::mdlEditarAsignacion($tabla, $datos);

				  if($respuesta == "ok"){

				   echo'<script>

				   swal({
						 type: "success",
						 title: "El Alumno ha sido asignado correctamente",
						 showConfirmButton: true,
						 confirmButtonText: "Cerrar"
						 }).then(function(result){
								   if (result.value) {

								   window.location = "asignaciondatos";

								   }
							   })

				   </script>';

			   }else{

					echo'<script>

						swal({
							  type: "error",
							  title: "¡El no se pudo asignar!",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
								if (result.value) {

								window.location = "asignaciondatos";

								}
							})

					  </script>';

				}

		}


	}



/*=============================================
BORRAR USUARIO
=============================================*/

static public function ctrBorrarAsignacion(){

	if(isset($_GET["idAsignacion"])){

		$tabla ="colegiobc";
		$datos = $_GET["idAsignacion"];

		$respuesta = ModeloAsignacionDatos::mdlBorrarAsignacion($tabla, $datos);

		if($respuesta == "ok"){

			echo'<script>

				swal({
						type: "success",
						title: "Ha sido borrada correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
						}).then(function(result){
								if (result.value) {

								window.location = asignaciondatos;

								}
							})

				</script>';
		}
	}

}

static public function getTotalAsignacion(){

		$response = ModeloAsignacionDatos::getTotalAsignacion();
		return $response;
}

}
