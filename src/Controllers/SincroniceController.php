<?php

require_once "src/Models/SincroniceModel.php";
require_once "src/Controllers/RolesController.php";
/** controlador que crea los registros de los pages*/

/**
 * 
 */
class SincroniceController
{
	
	public function newregister(){
				
		$scaneodir = SincroniceController::scaneodir();
		$contador = 1;
		$tabla = "aplicaciones";
		echo "<table class = 'table table-striped'>
						<thead>
							<tr><th>Item</th>
								<th>Nombre Aplicación</th>
								<th>Estado</th></tr>
						</thead>
						<tbody>";

		foreach ($scaneodir as $key) {

			$getvalidation = SincroniceModel::searchform($key[0],$tabla);
			
			if ($getvalidation == false) {

				$register = SincroniceModel::register($key[0],$tabla);

				if ($register == "sucess") {

					echo "<tr>
									<td>".$contador."</td>
									<td>".$key[0]."</td>
									<td>Sincronizado</td></tr>";
				}
				
			}else{
				
				echo "<tr>
									<td>".$contador."</td>
									<td>".$key[0]."</td>
									<td>Sin cambios</td></tr>"; 
				
			}
			$contador = $contador + 1;
		}
		echo "</tbody></table>";

	}

	public function scaneodir(){
		$break = array();
		$direct = "src/Views/apps";
		$getScan = array_diff(scandir($direct),array('..','.'));
		
		foreach ($getScan as $key => $contair) {
			$break[] = explode(".php", $contair);
		}

		return $break;

	}

#comparacion de los roles y las aplicaciones

	public function AplicationRol(){

		$getrol = RolesController::SelectRol("roles");
		$getaplicacion = SincroniceModel::AllAplication("aplicaciones");
		foreach ($getrol as $rol) {
			
			foreach ($getaplicacion as $app) {
				$setfind = SincroniceModel::FindAplicationRol($rol["id"],$app["id"], "aplicacion_rol");
				if ($setfind == false) {
					$registerapprol = SincroniceModel::RegisterAppRol($rol["id"],$app["id"], "aplicacion_rol");
				}

			}
		}

	}




}


?>