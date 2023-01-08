<?php 
include("includes/conexion_mysql.php");

?>


<?php require_once "vistas/parte_superior.php" ?>

<!-- INICIO del cont principal -->
<?php
	if(isset($_GET["band"])){
		$band=$_GET["band"];

			if ($band === "false") {
			    	echo '<script language="javascript">swal("Alerta!","La url ya existe","error");</script>';
			}else{
			    	echo '<script language="javascript">swal("Bien!","Se ha añadido correctamente","success");</script>';
			}

	}

?>

<?php include("includes/formulario.php")?>

<!-- FIN del cont principal -->

<?php require_once "vistas/parte_inferior.php" ?>