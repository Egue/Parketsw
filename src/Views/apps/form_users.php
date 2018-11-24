<?php
require_once "src/Controllers/RolesController.php";
require_once "src/Controllers/ParqueaderosController.php"
?>
</br>
<div><h1>Registro de Usuarios</h1></div>
<form method="post">
  <div class="form-group">
    	<label>Nombre de usuario</label>
      <input type="text" class="form-control" placeholder="Ingrese nombre de usuario" name="username" required="true"></div>
  <div class="form-group">   
  		<label>Email</label> 
      <input type="email" class="form-control" placeholder="Ingrese E-mail" name="email" required="true"></div>
  <div class="form-group">    
  	<label>Contraseña</label>
      <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="password" required="true"></div>
    <div class="form-group">    
    <label>Rol</label>
    <select class="form-control" required="true">
      <option value="">Seleccione rol..</option>
      <?php
        $allrol = RolesController::allRoles();
        foreach ($allrol as $key) {
          echo "<option value='".$key["id"]."'>".$key["nombre_rol"]."</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">    
    <label>Parqueaderos</label>
      <select class="form-control" required="true">
      <option value="">Seleccione parqueadero..</option>
      <?php
        $allparqueaderos = ParqueaderosController::allparqueaderos();
        foreach ($allparqueaderos as $key) {
          echo "<option value='".$key["id"]."'>".$key["razon_social"]."</option>";
        }

      ?>
    </select>
  </div>
    
</br>
  <input type="submit" value="Guardar" class="btn btn-success" />
</form>

<?php




?>