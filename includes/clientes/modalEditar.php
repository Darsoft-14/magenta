<!--modal para CRUD  Editar-->
<div class="modal fade" id="modEditar<?php echo $dat['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-warning text-white">
				<h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

		<form id="formClientes" action="includes/clientes/bd/crud.php?id=<?php echo $dat['id']; ?>" method="POST">

			<input type="hidden" id ="id" name="id" value="<?php echo $dat['id']; ?>">

			<div class="modal-body">
				<div class="form-group">
					<label for="cedula" class="col-form-label">Ced/Nit</label>
					<input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $dat['cedula']; ?>">
				</div>
				<div class="form-group">
					<label for="nombre" class="col-form-label">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $dat['nombre']; ?>">
				</div>
				<div class="form-group">
					<label for="direccion" class="col-form-label">Dirección</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $dat['direccion']; ?>">
				</div>
				<div class="form-group">
					<label for="ciudad" class="col-form-label">Ciudad</label>
					<input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $dat['ciudad']; ?>">
				</div>
				<div class="form-group">
					<label for="telefono" class="col-form-label">Telefono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $dat['telefono']; ?>">
				</div>
				<div class="form-group">
					<label for="correo" class="col-form-label">Correo</label>
					<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $dat['correo']; ?>">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
				<button class="btn btn-dark" name="btnEditar">Guardar</button>
			</div>
		</form>
		</div>		
	</div>
</div>