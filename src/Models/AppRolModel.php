<?php

require_once "src/Models/ConnectionModel.php";

/**
 * 
 */
class AppRolModel
{
	
	public function allapprol($approl,$tabla,$tabla2){
		$stmt = ConnectionModel::connect()->prepare("
			SELECT 
			$tabla.id,
			$tabla.roles_id,
			$tabla.eliminar,
			$tabla.insertar,
			$tabla.actualizar,
			$tabla.ver,
			$tabla2.nombre AS nombre_app  
			FROM $tabla 
			INNER JOIN $tabla2 
			ON ($tabla.aplicaciones_id = $tabla2.id)
			WHERE (roles_id = :approl)");
		$stmt->bindParam(":approl", $approl, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchall();

	}
}



?>