<?php

require_once "src/Models/ConnectionModel.php";

/**
 * 
 */
class Graf_pruebaModel
{
	
	public function GranGraf($tabla,$tabla2,$tabla3,$tabla4,$tabla5){
		$stmt	=	ConnectionModel::connect()->prepare("SELECT $tabla2.tipo,
       $tabla5.identificacion,
       $tabla.placa,
       $tabla3.fecha_ingreso,
       $tabla4.fecha_salida
FROM ((($tabla
        INNER JOIN $tabla2
           ON ($tabla.tipos_vehiculos_id = $tabla2.id))
       INNER JOIN $tabla3
          ON ($tabla3.vehiculos_id = $tabla.id))
      INNER JOIN $tabla4
         ON ($tabla4.detalle_ingresos_id = $tabla3.id))
     INNER JOIN $tabla5
        ON ($tabla.personas_id = $tabla5.id)");

        $stmt	->	execute();
        return 	$stmt	->	fetchAll();
	}
}




?>