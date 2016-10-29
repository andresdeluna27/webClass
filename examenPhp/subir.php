<?php
session_start();

$archivo=$_POST['archivo'];
$name=$_POST['name'];
if($_FILES[$archivo]["error"]>0){
	echo "Error: ".$_FILES['archivo']['error']."<br>";
}else{
 	echo "Nombre: ".$_FILES['archivo']['name']."<br>";
	echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
	echo "Tamaño: " . ($_FILES['archivo']["size"] / 1024) . " kB<br>";
	echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
    $up='img';
    $ruta=basename($_FILES['archivo']['name']);
	if(move_uploaded_file($_FILES['archivo']['tmp_name'], "$up/$ruta")){
	echo "se guardo";
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
	$usuario=$_SESSION['usuario'];
	$fecha=date("d-m-Y");
	$nombre=$_FILES['archivo']['name'];
	
	$inser=mysqli_query($conexion,"INSERT INTO imagenes VALUES('null','$nombre','$up/$ruta','$fecha','$usuario')");
    header("location:index.php");
}else{
	echo "no se guardo";
}
}	
?>