<?php
    ##error_reporting(E_ALL);
	##ini_set('display_errors',1 );
        $servidor="127.0.0.1";
        $cont="";
        $user="root";
        $bd="blog";
        $conexion=mysqli_connect($servidor,$user,$cont,$bd);
        if($conexion){
             ##echo "servidor disponible";
        }else{
             die("servidor no disponible: ".$conexion->connect_error);
        }
	$usuario=$_POST['User'];
	$contrasenia=$_POST['contra'];
        $verifica=mysqli_query($conexion,"SELECT login FROM usuarios WHERE password=$contrasenia");
        if($verifica){
            session_start();
            $_SESSION['usuario']=$usuario;
                header("location:index.php");
        }else{
            echo "datos erroneos";
        }
?>