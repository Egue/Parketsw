</br>
<div><h1>Registro de Roles</h1></div>
<form method="post">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nombre Rol" name="rolname" required="true">
    </div>
    
  </div>
</br>
  <input type="submit" value="Guardar" class="btn btn-success" />
</form>

<?php
require_once "src/Controllers/RolesController.php";
$messa = new RolesController();
$messa -> register();



?>