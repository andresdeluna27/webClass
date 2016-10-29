<?php
	##error_reporting(E_ALL);
	##ini_set('display_errors',1 );
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
    session_start();
	$usuario=$_SESSION['usuario'];
	$texto=$_POST['texto'];
	$id=$_SESSION['id'];
	$inser=mysqli_query($conexion,"INSERT INTO comentarios VALUES('$id','hoy','ahora','$textot','$usuario')");
	if($inser){
		echo "inserta";
        session_start();
        $_SESSION['usuario']=$usuario;
		header("location:comentarios.php");
	}else{
		echo "no inserta";
        header("location:comentarios.php");
	}
?>
