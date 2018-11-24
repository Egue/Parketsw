<?php
require_once "src/Models/PlantasModel.php";

/**
 * 
 */
class PlantasController
{	
	

		public function AllPlantas(){
			session_start();
			$getAllPlanta	=	PlantasModel::AllPlantas($_SESSION["idsede"],"plantas");
			$item	=	1;
			if ($getAllPlanta != false) {

				foreach ($getAllPlanta as $key) {
					echo "<tr>
								<td>".$item."</td>
								<td>".$key['planta']."</td>
								<td>
								<a href='index.php?action=Config_plantas&iddelete=".$key['id']."'><button class='btn btn-danger'>Eliminar</button></a></td>
								</tr>";
				}
				
			}else{
				echo "<tr>
						<td></td>
						<td>No Fund!!</td>
						<td></td>";
			}
		}

		public function DeletePlantas(){

		if (isset($_GET["iddelete"])){

			$iddelete = $_GET["iddelete"];

			$setdelete = PlantasModel::removeplanta($iddelete,"plantas");

			if ($setdelete == "success"){
				header("location:index.php?action=Config_plantas");
			}
		}

	}
	
	
}

?>