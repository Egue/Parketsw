<?php

require_once "src/Models/ConnectionModel.php";
/**
 * 
 */
class SincroniceModel
{
			
	public function register($datos, $tabla){
		
		$stmt = ConnectionModel::connect()->prepare("INSERT INTO $tabla(nombre)
			VALUES(:datos)");
		$stmt ->bindParam(":datos",$datos,PDO::PARAM_STR);
		if($stmt ->execute()){
			return "sucess";
		}else{
			return "error";
		}

	}


	public function searchform($form,$tabla){
		$stmt = ConnectionModel::connect()->prepare("SELECT nombre FROM $tabla WHERE nombre = :form");
		$stmt->bindParam(":form",$form,PDO::PARAM_STR);
		$stmt ->execute();

		return $stmt->fetch();
	}

	public function AllAplication($tabla){
		$stmt = ConnectionModel::connect()->prepare("SELECT id FROM $tabla");
		$stmt -> execute();
		return $stmt->fetchAll();
	}

	public function FindAplicationRol($rol,$aplication,$tabla){
		$stmt = ConnectionModel::connect()->prepare("SELECT roles_id, aplicaciones_id FROM $tabla WHERE roles_id = :rol AND aplicaciones_id = :aplication");
		$stmt ->bindParam(":rol",$rol,PDO::PARAM_INT);
		$stmt ->bindParam(":aplication",$aplication,PDO::PARAM_INT);
		$stmt ->execute();

		return $stmt ->fetch();

	}

	public function RegisterAppRol($rol,$aplication,$tabla){
		$stmt = ConnectionModel::connect()->prepare("INSERT INTO $tabla(roles_id,aplicaciones_id) VALUES (:rol,:aplication)");
		$stmt ->bindParam(":rol",$rol,PDO::PARAM_INT);
		$stmt ->bindParam(":aplication", $aplication, PDO::PARAM_INT);
		$stmt ->execute();
	}

	
}


?>