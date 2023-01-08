<?php
include_once "includes/clientes/bd/conexion.php";

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();


if(isset($_POST["guardar"])){

    $url1 = $_POST["url_txt"];

    $consulta = "SELECT * FROM general WHERE url = '$url1'";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $dat=$resultado->fetchAll(PDO::FETCH_ASSOC);

    foreach ($dat as $data) {

        $url2 = $data["url"];
        }
        /*validando la url*/

        if ($url2 === $url1) {
            header("Location: nuevo.php?band=false");

        }else{

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
                
                $titulo = $_POST["titulo"];
                $descripcion = $_POST["descripcion"];


                $consulta = "INSERT INTO general(url , usuario , contrasena , estado , cliente , registrador , paquete , vencimiento , otro_dominio , otro_registrador , otro_vencimiento , notas) VALUES ('$url1', '$usuario', '$contra', '$estado', '$cliente', '$regis1', '$paquete', '$fecha1', '$dominio',  '$regis2', '$fecha2', '$notas')";
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();           
                
                #redirigir despues de guardar a pagina principal
                header("Location: nuevo.php?band=true");
            }

       

    
}else{
    /*echo "no entro";*/
}

?>
