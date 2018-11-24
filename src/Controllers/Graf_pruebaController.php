<?php

require_once "src/Models/Graf_pruebaModel.php";

class Graf_pruebaController{

	public function GranGraf(){

		$getGranGraf = Graf_pruebaModel::GranGraf("vehiculos","tipos_vehiculos","detalle_ingresos","detalle_factura","personas");

		return $getGranGraf;
	}
}



?>