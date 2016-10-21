<html>
<head>
<title>sesion iniciada</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
session_start();

	if($_SESSION['usuario']==null){
header("location:accede.php");
}
$segundos=time();
$tiempoTranscurrido=$segundos;
$tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ;
if($tiempoTranscurrido > $tiempo_maximo){

header('location: accede.php');

}else{
echo $tiempoTranscurrido."<br>".$tiempo_maximo;
// se resetea el inicio

$_SESSION['inicio'] = time();

}
    $servidor="127.0.0.1";
    $usuario="root";
    $cont="holamundo";
    $bd="app1";
    
    $login=$_SESSION['usuario'];
    echo "datos del usuario";
    $conn=mysqli_connect($servidor,$usuario,$cont,$bd);
		if($conn){
			echo "<br>conexion exitosa";
		}else{
		  die("<br>Error de conexion:".$conn->connect_error);
		}
    
    $resp = mysqli_query($conn, "select * from usuarios where login ='$login'");
if ($fila= $resp->fetch_row()) {
	echo "<br>Nombre: ".$fila[2];
	echo "<br>Usuario: ".$fila[0];

	echo "<br>Contraseña: ".$fila[1];

}else{
	session_destroy();
header("location:accede.php");
}
if(!isset($_SESSION)){
header("location:accede.php");
}

?>
<br>
<a href="hacerPDF.php">generar PDF</a>
<br>
<a class="logout" href="logout.php">salir</a>
</body>
</html>

