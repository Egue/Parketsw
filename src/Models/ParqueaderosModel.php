<?php
require_once "src/Models/ConnectionModel.php";

class ParqueaderosModel
{
	
	#consulta parqueaderos a la base de datos
	public function allparqueaderos($tabla){
		$stmt = ConnectionModel::connect()->prepare("
			SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchall();

	}
}


?>