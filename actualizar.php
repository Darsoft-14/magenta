<?php 

include_once "includes/clientes/bd/conexion.php";

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    
    
if (isset($_POST["actualizar"])){
    $id2 = $_GET["id"];
    $url = $_POST["url_txt"];
    $usuario = $_POST["usuario_txt"];
    $contra = $_POST["contrasena_txt"];
    $estado = $_POST["estado_txt"];

    $cliente = $_POST["cliente_txt"];
    $regis1 = $_POST["regis1_txt"];
    $paquete = $_POST["paquete_txt"];
    $fecha1 = $_POST["fecha1_txt"];

    $dominio = $_POST["dominio_txt"];
    $regis2 = $_POST["regis2_txt"];
    $fecha2 = $_POST["fecha2_txt"];

    $notas = $_POST["notas_txt"];

    $consulta = "UPDATE general set url = '$url', usuario = '$usuario', contrasena = '$contra', estado = '$estado', cliente = '$cliente', registrador = '$regis1', paquete = '$paquete', vencimiento = '$fecha1', otro_dominio = '$dominio', otro_registrador = '$regis2', otro_vencimiento = '$fecha2', notas = '$notas' WHERE id = $id2";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

 
    header("Location: buscar.php?band=true&id3=$id2");

}else{
    header("Location: buscar.php");
}




?>