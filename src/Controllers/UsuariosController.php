<?php 
require_once "src/Models/UsuariosModel.php";

/**
 * 
 */
class UsuariosController
{
	
	#consulta de todos los usuarios

	public function allusers(){

		$getallUsers = UsuariosModel::allusersmodel("usuarios","sedes","roles","parqueaderos");
		return $getallUsers;

	}

	public function GraTortaEmail(){
		$getGraTortaEmail	=	UsuariosModel::GraTortaEmail();

		return $getGraTortaEmail;
	}
}



 ?>