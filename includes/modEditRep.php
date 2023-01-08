<!--modal para CRUD  Editar-->
<div class="modal fade" id="repEditar<?php echo $dat['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-warning text-white">
				<h5 class="modal-title" id="exampleModalLabel">Editar Reporte</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

		<form id="formClientes" action="includes/clientes/bd/guardarRep.php?id=<?php echo $dat['id']; ?>" method="POST">

			<input type="hidden" id ="id" name="id" value="<?php echo $dat['id']; ?>">

			<div class="modal-body">
				<div class="form-group">
					<label for="cedula" class="col-form-label">Url</label>
					<input type="text" class="form-control" id="url" disabled name="url" value="<?php echo $dat['url']; ?>">
				</div>
				<div class="form-group">
					<label for="nombre" class="col-form-label">vence</label>
					<input type="text" class="form-control" id="vencimiento" name="vencimiento" value="<?php echo $dat['vencimiento']; ?>">
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