<?php
require_once "src/Controllers/RolesController.php";
require_once "src/Controllers/AppRolController.php";
?>
<br>
<br>
<div>
	<form method="POST">
		<div class="form-row">
    		<div class="col">
    			<select class="form-control" name="controlrol">
    				<option>Seleccione..</option>
    				<?php
				        $allrol = RolesController::SelectRol();
				        foreach ($allrol as $key) {
				          echo "<option value='".$key["id"]."'>".$key["nombre_rol"]."</option>";
				        }?>

    			</select>

			</div>
			<div class="col">
				<input type="submit" class="btn btn-success" />
			</div>
		</div>
	</form>
</div>

<?php
$obj = new AppRolController;
$obj ->Dirform_approl();

?>