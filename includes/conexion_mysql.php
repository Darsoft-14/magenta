<?php 
    
    session_start();

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'bd_magenta1';

	$conection = @mysqli_connect($host,$user,$password,$db);

    
	/* if(!$conection){
		echo "Error en la conexión";
	} else{
		echo"conexion exitosa ";
	}*/

?>