<?php
    $servidor="127.0.0.1";
    $usuario="root";
    $cont="holamundo";
    $bd="app1";
    $login=$_POST["usuario"];
    $pass=$_POST["contraseña"];
    echo "Usuario $login <br> Constraseña $pass";
    $conn=mysqli_connect($servidor,$usuario,$cont,$bd);
		if($conn){
			echo "<br>conexion exitosa";
		}else{
		  die("<br>Error de conexion:".$conn->connect_error);
		}
    $resp = mysqli_query($conn, "select * from usuarios where login = '$login' and password = '$pass'");
    $fila = $resp->fetch_row();
	if($fila){
		session_start();
		$_SESSION['usuario'] = $login;
		$_SESSION['intervalo']=10;
		$_SESSION['inicio']=time();
		header ("Location: datos.php");

	}
	else{
		echo "<br>El usuario: ".$login." no esta registrado";
        header("Location: accede.php");
	}

$conn-> close();
?>
