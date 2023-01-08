<?php 
include_once "includes/clientes/bd/conexion.php";

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

if (isset($_POST["buscar"])){
    if ($_POST["buscarselec"] == 0) {

        header("Location: buscar.php");

    }else{
        $id = $_POST["buscarselec"];

        $consulta = "SELECT url, usuario, contrasena, estado, cliente, registrador, paquete, vencimiento, otro_dominio, otro_registrador, otro_vencimiento, notas FROM general WHERE id = $id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dat=$resultado->fetchAll(PDO::FETCH_ASSOC);
        // $data = $fila = mysqli_fetch_array($dat);
        foreach ($dat as $data) {
                   
            $url = $data['url'];
            $usuario = $data["usuario"];
            $contra = $data["contrasena"];
            $estado = $data["estado"];

            $cliente = $data["cliente"];
            $regis1 = $data["registrador"];
            $paquete = $data["paquete"];

            $date1 = new DateTime($data["vencimiento"]);
            $fecha1 = $date1->format('Y-m-d');
          

            $dominio = $data["otro_dominio"];
            $regis2 = $data["otro_registrador"];

            $date2 = new DateTime($data["otro_vencimiento"]);
            $fecha2 = $date2->format('Y-m-d');
            
            $notas = $data["notas"];

        }
        
    }
}

/*cuando ya se ha guardado*/
if(isset($_GET["band"])){
        $band=$_GET["band"];
        $id=$_GET["id3"];

   
        $consulta = "SELECT url, usuario, contrasena, estado, cliente, registrador, paquete, vencimiento, otro_dominio, otro_registrador, otro_vencimiento, notas FROM general WHERE id = $id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dat=$resultado->fetchAll(PDO::FETCH_ASSOC);
        // $data = $fila = mysqli_fetch_array($dat);
        foreach ($dat as $data) {
                   
            $url = $data['url'];
            $usuario = $data["usuario"];
            $contra = $data["contrasena"];
            $estado = $data["estado"];

            $cliente = $data["cliente"];
            $regis1 = $data["registrador"];
            $paquete = $data["paquete"];

            $date1 = new DateTime($data["vencimiento"]);
            $fecha1 = $date1->format('Y-m-d');
          

            $dominio = $data["otro_dominio"];
            $regis2 = $data["otro_registrador"];

            $date2 = new DateTime($data["otro_vencimiento"]);
            $fecha2 = $date2->format('Y-m-d');
            
            $notas = $data["notas"];

        }
    }


?>


<?php require_once "vistas/parte_superior.php" ?>

<?php
    if(isset($_GET["band"])){
        $band=$_GET["band"];

            if ($band === "true") {
                    echo '<script language="javascript">swal("Bien!","Se ha Actualizado correctamente","success");</script>';
            }

    }

?>


<?php include("includes/select_b.php")?>


<?php 
    if(isset($_GET["band"])){
        include("includes/formulario_b.php");
    }


    if (isset($_POST["buscar"])) {
        if ($_POST["buscarselec"] == 0) {
            header("Location: buscar.php");            
        }else{
            include("includes/formulario_b.php");
        }
       
    }
    
?>





<?php include("vistas/parte_inferior.php") ?>