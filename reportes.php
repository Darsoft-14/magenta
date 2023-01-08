<?php
date_default_timezone_set('America/Bogota');
	include_once "includes/clientes/bd/conexion.php";
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();

	$consulta = "SELECT id, url, paquete, cliente, registrador, vencimiento FROM general ORDER BY vencimiento";
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include ("vistas/parte_superior.php"); ?>

<!-- INICIO Clientes -->
<!-- <h2 class="text-center"><span class="badge bg-success">Tabla Clientes</span></h2> -->

	<!-- boton nuevo -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      	<h4 class=""><span>Reporte</span></h4>
      </div>
    </div>
  </div>
  <br>

 <!-- contenedores de la  tabla -->
<div class="container-sm">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <!-- Inicio Tabla -->
        <table id="Clientes" class="table table-striped table-bordered table-condensed" style="width:100%">
	        <thead>
	            <tr>
	                <th>Url</th>
	                <th>Paquete</th>
	                <th>Cliente</th>
	                <th>Registrador</th>
	                <th>Vence</th>
	                <th>Días</th>
	                <th></th>
	            </tr>
	        </thead>

	        <tbody>
				<?php
					
	            foreach($data as $dat) { 
	            	/*validacion fecha*/
	             	$fecha = $dat['vencimiento'];
		            $fecha1 = date_create($fecha);
		            $fecha_actual = date("Y-m-d");
					$fecha2 = new DateTime($fecha_actual);
					$diferen = date_diff($fecha2,$fecha1);
					$camb =  $diferen->format("%R%a");
					/*validacion fecha*/
					if ($fecha === "-0001-11-30" or $fecha === "0000-00-00") {
						/*estas fechas no entran*/
					}else{

					if ($camb < 31) {	
									
					
	            ?>
	           
	            <tr>
	                <td><?php echo $dat['url'] ?></td>
	                <td><?php echo $dat['paquete'] ?></td>
	                <td><?php echo $dat['cliente'] ?></td>
	                <td><?php echo $dat['registrador'] ?></td>    
	                <td><?php echo $dat['vencimiento'] ?></td>
	                <td><?php echo $camb ?></td>
	              	<!-- <td><?php /*echo $i*/ ?></td> -->
	                <td>
	                	<a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#repEditar<?php echo $dat['id']; ?>">
                             <i class="fas fa-marker" name="editar"></i>
                         </a>

	                </td>
	            </tr>

	            <!--Ventana modal Editar reporte -->
	            <?php include('includes/modEditRep.php'); ?>
					
	            
	            <?php
	               } } }
	            ?>
			</tbody>        
    	</table>
        <!-- Fin Tabla -->
      </div>
    </div>
  </div>
</div>

<!--modal para CRUD  Guardar-->
<div class="modal fade" id="modNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-success text-white">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
		<form id="formClientes" action="includes/clientes/bd/crud.php" method="POST">
			<div class="modal-body">
				<div class="form-group">
					<label for="cedula" class="col-form-label">Ced/Nit</label>
					<input type="text" class="form-control" id="cedula" name="cedula">
				</div>
				<div class="form-group">
					<label for="nombre" class="col-form-label">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre">
				</div>
				<div class="form-group">
					<label for="direccion" class="col-form-label">Dirección</label>
					<input type="text" class="form-control" id="direccion" name="direccion">
				</div>
				<div class="form-group">
					<label for="ciudad" class="col-form-label">Ciudad</label>
					<input type="text" class="form-control" id="ciudad" name="ciudad">
				</div>
				<div class="form-group">
					<label for="telefono" class="col-form-label">Telefono</label>
					<input type="text" class="form-control" id="telefono" name="telefono">
				</div>
				<div class="form-group">
					<label for="correo" class="col-form-label">Correo</label>
					<input type="text" class="form-control" id="correo" name="correo">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
				<button class="btn btn-dark" name="btnGuardar">Guardar</button>
			</div>
		</form>
		</div>		
	</div>
</div>


<!-- FIN Clientes -->

<?php include ("vistas/parte_inferior.php"); ?>