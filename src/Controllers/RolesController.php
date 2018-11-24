<?php
require_once "src/Models/RolesModel.php";

class RolesController
{
	
	public function register(){
		if (isset($_POST["rolname"])) {
			
		$newrol = array("rolname"=>$_POST["rolname"]);

		$getrol = RolesModel::newRol($newrol,"roles");

		if ($getrol=="Succes") {
			header("location:index.php?action=grid_roles");
		}else{
			header("location:index.php");
		}
	}
	}

	public function allRoles(){
		$getallrol = RolesModel::allRol("roles");
		$temp = 1;
			foreach ($getallrol as $key) {
			echo "<tr>
						<td>".$temp."</td>
						<td>".$key["nombre_rol"]."</td>
						<td><a href='index.php?action=grid_roles&iddelete=".$key["id"]."'>
						<button class='btn btn-danger'>Borrar</button>
						 </a></td></tr>";
			$temp = $temp + 1;
		}
	}

	public function deleteRoles(){

		if (isset($_GET["iddelete"])){

			$iddelete = $_GET["iddelete"];

			$setdelete = RolesModel::removerol($iddelete,"roles");

			if ($setdelete == "success"){
				header("location:index.php?action=grid_roles");
			}
		}

	}

	public function SelectRol(){
		$getallrol = RolesModel::allrol("roles");

		return $getallrol;
	}

	public function CountRolUser($id){
		$getCountRolUSer = RolesModel::CountRolUser($id,"usuarios");

		return $getCountRolUSer;
	}
}
?>