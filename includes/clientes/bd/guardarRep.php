<?php

	include_once "conexion.php";
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();


if (isset($_POST["btnEditar"])){

		$id = $_GET["id"];
		$vencimiento = $_POST["vencimiento"];
		

		$consulta = "UPDATE general SET vencimiento='" .$vencimiento. "' WHERE id='" .$id. "'";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();

		header("Location: ../../../reportes.php");
		}



?>