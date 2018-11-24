<?php

/**
 * 
 */
class Controller
{
	
	public function template(){
		include "src/Views/Templates.php";
	}

	public function enlacesPaginasController(){

		if (isset($_GET["action"])) {
			
			$enlacesController 	=	$_GET["action"];
		}else{
			$enlacesController = "main";
		}
		$getEnlaces = EnlacesModel::enlacesPaginasModel($enlacesController);
		include $getEnlaces;
	}
}

?>