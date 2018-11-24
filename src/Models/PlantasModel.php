<?php

require_once "src/Models/ConnectionModel.php";



class PlantasModel
{

	public function AllPlantas($idsede,$tabla){

		$stmt	=	ConnectionModel::connect()->prepare("SELECT * FROM $tabla WHERE sedes_id =:idsede");
		$stmt	->	bindParam(":idsede",$idsede,PDO::PARAM_INT);
		$stmt	->	execute();

		return $stmt	->	fetchAll();
		$stmt->close();
	}

	public function removeplanta($id,$tabla){

		$stmt	=	ConnectionModel::connect()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id",$id,PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "succes";
		}else{
			
			print_r($stmt->errorInfo());
		}
		

	}
}


?>