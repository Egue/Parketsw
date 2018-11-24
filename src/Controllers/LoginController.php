<?php
require_once "src/Models/LoginModel.php";

class LoginController{


	public function loginin(){
		if (isset($_POST["user"])) {
			
			$login = array("user"=>$_POST["user"],"password"=>$_POST["password"]);

			$getlogin = LoginModel::validation($login,"usuarios");
			

			if ($getlogin["username"] == $_POST["user"] && $getlogin["password"] == md5($_POST["password"])) {
				session_start();
				#Creando variables de sesion
				$_SESSION["user"]	=	$getlogin["username"];
				$_SESSION["iduser"]	=	$getlogin["iduser"];
				$_SESSION["idsede"]	=	$getlogin["sedes_id"];

				header("location:index.php");
			}else{
				header("location:login.php?action=loginerror");
				
			}
		}
	}
}


?>