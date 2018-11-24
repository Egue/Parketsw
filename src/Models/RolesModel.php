<?php


require_once "src/Models/ConnectionModel.php";

class RolesModel extends ConnectionModel
{

#crea los roles del sistema
	public function newRol($datos, $tabla){

		$stmt = ConnectionModel::connect()->prepare("INSERT INTO $tabla(nombre_rol )
			VALUES(:rolname)");

		$stmt->bindParam(":rolname", $datos["rolname"],PDO::PARAM_STR);

		if($stmt->execute()){

			return "Succes";
		}else{
			return "error";
		}

	}
#carga todos los roles de la base de datos
	public function allrol($tabla){

		$stmt = ConnectionModel::connect()->prepare("SELECT * FROM $tabla");
		$stmt->execute();

		return $stmt->fetchall();

	}
	
	public function removerol($id,$tabla){
		$stmt = ConnectionModel::connect()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt ->bindParam(":id",$id,PDO::PARAM_INT);
		if ($stmt->execute()) {
			return "success";
		}else{
			return "Error";
		}	
		$stmt->close();
	}

	public function CountRolUser($id,$tabla){
		$stmt	=	ConnectionModel::connect()->prepare("SELECT roles_id FROM $tabla WHERE roles_id = :id");
		$stmt->bindParam(":id",$id,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->rowCount();
	}
}

?>