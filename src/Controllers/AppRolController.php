<?php
require_once "src/Models/AppRolModel.php";
/**
 * 
 */
class AppRolController
{
	public function AllAppRol(){

		if (isset($_GET["approl"])) {
			$approl = $_GET["approl"];
			 $getapprol = AppRolModel::allapprol($approl,"aplicacion_rol","aplicaciones");

			 if($getapprol != false){
			 	$contador = 1;

			 	foreach ($getapprol as $key) {
			 		echo '
			 				<tr>
			 					<td>'.$contador.'</td>
			 					<td><label>'.$key["nombre_app"].'</label></td>
			 					
			 					<td><input type="checkbox" aria-label="Checkbox for following text input"></td>
			 					<td><input type="checkbox" aria-label="Checkbox for following text input"></td>
			 					<td><input type="checkbox" aria-label="Checkbox for following text input"></td>
			 					<td><input type="checkbox" aria-label="Checkbox for following text input">	</td>
			 			 	</tr>';
			 		$contador = $contador + 1;
			 	}

			 }else{
			 	echo "No Funds";
			 }
		}
	}

	public function Dirform_approl(){
		if (isset($_POST["controlrol"])) {
			$dir = $_POST["controlrol"];
			header("location:index.php?action=form_approl&approl=$dir");
		}
	}
	
}

?>