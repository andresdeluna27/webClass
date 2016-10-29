<html>
<head>
	<title>inicio</title>
    <link rel="stylesheet" href="case.css">
</head>
<header>
    <?php
    session_start();
    /*if($_SESSION['usuario']!=null){
        $op=1;
    }else{
        $op=2;
    }*/
    if(!empty($_SESSION)){
        $op=1;
    }else{
        $op=2;
    }
    switch($op){
        case 1:##si ya está iniciada sesion
            {
                $usu=$_SESSION['usuario'];
                ##echo "<p>$usu</p><br><a href=\"logout.php\">logout</a>";
                echo "
                <section class=\"logo\">
                <img class=\"imagen\" src=\"img/logo2.jpg\">
                </section>
                <section class=\"logs\">
                <a class=\"links\" href=\"#\">$usu</a>
                <a class=\"links\" href=\"logout.php\">[x]</a>
                </section>
                ";
                break;
            }
        case 2:##si no hay sesion activa
            {
                echo "
                <section class=\"logo\">
                <img class=\"imagen\" src=\"img/logo2.jpg\">
                </section>
                <section class=\"logs\">
                <a class=\"links\" href=\"login.php\">login  x    |</a>
                <a class=\"links\" href=\"nuevo.php\">registrarse</a>
                </section>
                ";
                break;
            }
        default:##si hay un error
            {
                echo "404 page not found";
                break;
            }
    }
	?>
</header>
	<?php
	/*if(isset($_SESSION)){
		$usu=$_SESSION['usuario'];
		echo "<p>$usu</p><br><a href=\"#\">logout</a>";
		##header("location:accede.php");
	}else{
		echo "<a href=\"nuevo.php\">registrarse</p>";
        echo "<a href=\"login.php\">login</p>";
	}*/
    /*if($_SESSION['usuario']!=null){
        $op=1;
    }else{
        $op=2;
    }*/
    if(!empty($_SESSION)){
        $op=1;
    }else{
        $op=2;
    }
    switch($op){
        case 1:##si ya está iniciada sesion
            {
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
                $resp=mysqli_query($conexion,"SELECT * FROM imagenes");
                echo "
                    <body class=\"bodyA\">
                    <section class=\"secBtn\">
                    <a class=\"botonP\" href=\"publica.php\">Publicar</a>
                    </section>
                    <br>
                    ";
                while($fila=$resp->fetch_row()){
                    echo "
                    <form method=\"post\" action=\"comentarios.php\">
                    <section class=\"sectI\">
                    <div class=\"divImagen\">$fila[4] $fila[0]</div>
                    <div class=\"divImagen\">$fila[3]</div>
                    <hr>
                    <div class=\"imagenP\">
                    <img class=\"imagenSec\" src=\"$fila[2]\">
                    </div>
                    <a class=\"links\" href=\"#\">comentarios</a>
                    <input type=\"hidden\" id=\"id\" name=\"id\" value=\"$fila[0]\">
                    <input type=\"submit\">
                    </section>
                    </form>
                    <br>";
                }
                echo  "
                    <section>
                    <div>
                    prev
                    </div>
                    <div>
                    sig
                    </div>
                    </section>
                    </body>
                ";
                break;
                ##$usu=$_SESSION['usuario'];
                ##echo "<p>$usu</p><br><a href=\"logout.php\">logout</a>";
            }
        case 2:##si no hay sesion activa
            {
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
                $resp=mysqli_query($conexion,"SELECT * FROM imagenes");
                while($fila=$resp->fetch_row()){
                    $ruta=$fila[2];
                    $publicador=$fila[4];
                    $fecha=$fila[3];
                }
                echo "
                    <body class=\"bodyB\">
                    <section class=\"sectI\">
                    <div class=\"divImagen\">$publicador</div>
                    <div class=\"divImagen\">$fecha</div>
                    <hr>
                    <div class=\"imagenP\">
                    <img class=\"imagenSec\" src=\"$ruta\">
                    </div>
                    </section>
                    </body>
                ";
                break;
            }
        default:##si hay un error
            {
                echo "404 page not found";
                break;
            }
    }
	?>
</html>
