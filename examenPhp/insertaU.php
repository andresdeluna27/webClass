<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1 );
        $servidor="127.0.0.1";
        $cont="";
        $user="root";
        $bd="blog";
        $conexion=mysqli_connect($servidor,$user,$cont,$bd);
        if($conexion){
             echo "servidor disponible";
        }else{
             die("servidor no disponible: ".$conexion->connect_error);
        }
	$usuario=$_POST['nuevoUser'];
	$contrasenia=$_POST['contra'];
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$inser=mysqli_query($conexion,"INSERT INTO usuarios VALUES('$usuario','$nombre','$contrasenia','$correo')");
	if($inser){
		echo "inserta";
		header("location:nuevo.php");
	}else{
		echo "no inserta";
	}
?>
