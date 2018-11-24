<!-- Button trigger modal -->
<br>
<div style="align-content: rigth;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Nuevo
</button>
</div>
<br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Item</th>
			<th>Rol</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
	<?php 

			require_once	"src/Controllers/RolesController.php";
			$allrol = new RolesController;
			$allrol ->allRoles();
			$allrol -> deleteRoles();
			
	?>
	</tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			        <form method="post">
			  			<div class="form-row">
			    			<div class="col">
			      				<input type="text" class="form-control" placeholder="Nombre Rol" name="rolname" required="true">
			    			</div>
			    
			  			</div>
					</br>
			  			
					
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="Guardar" class="btn btn-success" />
      </div>
      </form>
    </div>
  </div>
</div>
<?php
require_once "src/Controllers/RolesController.php";
$messa = new RolesController();
$messa -> register();



?>