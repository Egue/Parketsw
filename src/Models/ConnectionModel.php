<?php
/**
 * 
 */
class ConnectionModel
{
	
	public function connect(){
		$db = new PDO("mysql:host=localhost;dbname=db_parqueadero;charset=UTF8","root","ikaros");
		return $db;


	}
}

?>