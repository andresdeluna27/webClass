<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form method="post" action="validar.php">
            
            <?php
            	error_reporting(E_ALL);
		ini_set('display_errors',1 );
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
            ?>
            <label for="User">Usuario</label>
            <input type="text" name="User" id="User">
            <br>
            <label for="contra">Contraseña</label>
            <input type="password" name="contra" id="contra">
            <br>
            <input type="submit">
        </form>
    </body>
</html>
