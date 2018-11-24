<?php

require_once "src/Models/ConnectionModel.php";


class LoginModel extends ConnectionModel
{
	public function validation($login, $tabla){

		$stmt = ConnectionModel::connect()->prepare("SELECT * FROM $tabla where 
			username = :usuario AND password = :password");
		$stmt->bindParam(":usuario", $login["user"], PDO::PARAM_STR);
		$stmt->bindParam(":password",md5($login["password"]),PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
	}
	
}


?>