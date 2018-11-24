<br>
<div style="align-content: rigth;">
<button type="button" class="btn btn-primary" >Nuevo</button>
</div>
<br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Item</th>
			<th>Planta</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
	<?php 

			require_once	"src/Controllers/PlantasController.php";
			$allrol = new PlantasController;
			$allrol ->AllPlantas();
			$allrol	->DeletePlantas();
			
	?>
	</tbody>
</table>