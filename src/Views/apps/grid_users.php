<br>
<div><a class="btn btn-primary" href="index.php?action=form_users" role="button">Nuevo</a></div>

<br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre usuario</th>
			<th>Email</th>
			<th>rol</th>
			<th>Parqueadero</th>
			<th>Sede</th>
			<th>Fecha de creación</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		<?php
		require_once "src/Controllers/UsuariosController.php";
		$allusers = UsuariosController::allusers();
		
		foreach ($allusers as $key) {
			echo "<tr>
					<td>".$key["username"]."</td>
					<td>".$key["email"]."</td>
					<td>".$key["nombre_rol"]."</td>
					<td>".$key["razon_social"]."</td>
					<td>".$key["nombre_sede"]."</td>
					<td>".$key["creado"]."</td><td></td></tr>";
		}

		?>
	</tbody>
</table>