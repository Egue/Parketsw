

<?php
require_once "src/Models/ConnectionModel.php";
/**
 * 
 */
class UsuariosModel
{
	
	#consulta de los usuarios a la base de datos
	#"usuarios","sedes","roles","parqueaderos"

	public function allusersmodel($tabla1,$tabla2,$tabla3,$tabla4){

		$stmt = ConnectionModel::connect()->prepare("
			SELECT 
			$tabla1.iduser,
			$tabla1.username,
			$tabla1.email,
			$tabla2.nombre AS nombre_sede,
			$tabla2.id 	AS idsede,
			$tabla3.nombre_rol,
			$tabla1.create_time AS creado,
			$tabla4.razon_social
			FROM $tabla1 
			INNER JOIN $tabla2 ON $tabla1.sedes_id = $tabla2.id 
			INNER JOIN $tabla3 ON $tabla1.roles_id = $tabla3.id
			INNER JOIN $tabla4 ON $tabla2.id = $tabla4.id	");
		$stmt->execute();
		return $stmt->fetchall();
	}


	public function GraTortaEmail($tabla){

	}

}



?>