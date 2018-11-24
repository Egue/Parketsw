<?php

/**
*Controla los enlaces el sistema
**/

class EnlacesModel 
{	


	public function enlacesPaginasModel($enlacesModel){

		#Diccionario de enlaces de la plataforma
		$enlaces = array("_appreport","_appsystem","_appwe","form_roles","grid_roles","grid_users","form_users","_sincronice","Control_roles","form_approl","graf_prueba","graf_prueba2","grid_dep","form_dep","graf_prueba3","Config_plantas");

		#
		#Buscar enlace en el diccionario $enlaces los principales aplicaciones
		#
		#

		if (in_array($enlacesModel, $enlaces)) {

			$setModel = "src/Views/apps/".$enlacesModel.".php";
		
		}elseif ($enlacesModel=="main") {
			
			$setModel = "src/Views/apps/_appmain.php";

		}elseif ($enlacesModel=="ok") {
			
			$setModel = "src/Views/apps/form_roles.php";

		}elseif ($enlacesModel 	== "logout") {
			session_start();
			session_destroy();
			header("location:login.php");
		}
		else{

			$setModel = "src/Views/apps/_appmain.php";
		}

		return $setModel;

	}
}

?>