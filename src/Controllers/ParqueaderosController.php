<?php
require_once "src/Models/ParqueaderosModel.php";
/**
 * 
 */
class ParqueaderosController
{
	
	#consulta todos los parqueaderos
	public function allparqueaderos(){

		$getallparqueadero = ParqueaderosModel::allparqueaderos("parqueaderos");
		return $getallparqueadero;
	}
}

?>