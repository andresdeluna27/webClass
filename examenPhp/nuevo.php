<html>
    <head>
        <title>Nuevo usuario</title>
    </head>
    <body>
        <form method="post" action="insertaU.php">
            
            <?php
            	error_reporting(E_ALL);
		ini_set('display_errors',1 );
                $servidor="127.0.0.1";
                $cont="holamundo";
                $user="root";
                $bd="blog";
                $conexion=mysqli_connect($servidor,$user,$cont,$bd);
                if($conexion){
                    ##echo "servidor disponible";
                }else{
                    die("servidor no disponible: ".$conexion->connect_error);
                }
            ?>
            <label for="nuevoUser">Usuario</label>
            <input type="text" name="nuevoUser" id="nuevoUser">
            <br>
            <label for="contra">Contrasenia</label>
            <input type="text" name="contra" id="contra">
            <br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="correo">Correo Electronico</label>
            <input type="text" id="correo" name="correo">
		<input type="submit">
            
            
        </form>
    </body>
</html>
