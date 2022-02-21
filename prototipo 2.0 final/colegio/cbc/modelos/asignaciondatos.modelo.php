<?php

require_once "conexion.php";

class ModeloAsignacionDatos{

	/*=============================================
	MOSTRAR ASIGNACION
	=============================================*/

	static public function mdlMostrarAsignacion($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	EDITAR ASIGNACION
	=============================================*/

	static public function mdlEditarAsignacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Apellido_Materno = :Apellido_Materno, Apellido_Paterno = :Apellido_Paterno, Nombres = :Nombres, Grado = :Grado, Grupo = :Grupo, Estatus = :Estatus, Nivel = :Nivel, genero = :genero, Curp = :Curp WHERE Id = :Id");

		$stmt -> bindParam(":Apellido_Materno", $datos["Apellido_Materno"], PDO::PARAM_STR);
		$stmt -> bindParam(":Apellido_Paterno", $datos["Apellido_Paterno"], PDO::PARAM_STR);
		$stmt -> bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
		$stmt -> bindParam(":Grado", $datos["Grado"], PDO::PARAM_STR);
		$stmt -> bindParam(":Grupo", $datos["Grupo"], PDO::PARAM_STR);
	 $stmt -> bindParam(":Estatus", $datos["Estatus"], PDO::PARAM_STR);
	 $stmt -> bindParam(":Nivel", $datos["Nivel"], PDO::PARAM_STR);
	 $stmt -> bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
	 $stmt -> bindParam(":Curp", $datos["Curp"], PDO::PARAM_STR);

		$stmt -> bindParam(":Id", $datos["Id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

/**************************************************************************/

	static public function mdlBorrarAsignacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE Id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;

	}

	public static function getTotalAsignacion()
{

	try {
			$sum = Conexion::conectar()->prepare("SELECT COUNT(*) FROM colegiobc");
			$sum->execute();

			return $sum->fetch();
	} catch (PDOException $e) {
			$e->getMessage();
	}
}

}
