<?php 


    // $objeto = new Conexion();
    // $conexion = $objeto->Conectar();

    $consulta = "SELECT id, url from general ORDER BY url";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

   /* include("conexion_mysql.php");*/

  //   $query = "SELECT id, url from general ORDER BY url";
  // $result = mysqli_query($conection,$query);


?>

<div class="container">
	<form class="form-inline  navbar-search" action="buscar.php" method="POST">
        <div class="input-group">

            <select  class="form-control mb-2 mr-sm-2" name="buscarselec" class="form-select form-select-lg  aria-label" id="controlBuscador">
		       <option value="0">Selecciona una opción</option>
		          <?php foreach ($data as $dat) {?>

		        <option value="<?php echo $dat["id"] ?>">
		                      <?php echo $dat["url"] ?>
		        </option>
		                      <?php }?>
		    </select>
            <div class="input-group-append mb-2 mr-sm-2">
                <button class="btn btn-primary" type="submit" name="buscar">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
</div>