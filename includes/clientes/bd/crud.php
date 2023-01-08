<?php
	include_once "conexion.php";
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();

	
	if (isset($_POST["btnGuardar"])){

		$cedula = $_POST["cedula"];
		$nombre = $_POST["nombre"];		
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["ciudad"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];

		$consulta = "INSERT INTO cliente (cedula, nombre, direccion, ciudad, telefono, correo) VALUES ('$cedula', '$nombre', '$direccion', '$ciudad', '$telefono', '$correo')";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();

		header("Location: ../../../clientes.php");
	}else{

		if (isset($_POST["btnEditar"])){

		$id = $_GET["id"];
		$cedula = $_POST["cedula"];
		$nombre = $_POST["nombre"];		
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["ciudad"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];

		$consulta = "UPDATE cliente SET cedula='" .$cedula. "', nombre='".$nombre. "', direccion='" .$direccion. "', ciudad='" .$ciudad. "', telefono='" .$telefono. "', correo='" .$correo. "' WHERE id='" .$id. "'";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();

		header("Location: ../../../clientes.php");
		}else{

			if(isset($_GET["id"])){

				$id = $_GET["id"];

				$consulta = "DELETE FROM cliente WHERE id = $id";
				$resultado = $conexion->prepare($consulta);
				$resultado->execute();

				header("Location: ../../../clientes.php");
			}

		}
	}


	



?>