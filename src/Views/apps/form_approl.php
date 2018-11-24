<?php
require_once "src/Controllers/AppRolController.php";

?>

<form>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Item</th>
				<th>Nombre App</th>
				<th>Ver</th>
				<th>Insertar</th>
				<th>Actualizar</th>
				<th>Borrar</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$obj = new AppRolController;
				$obj ->AllAppRol();
			?>
		</tbody>
	</table>
			
		
</form>