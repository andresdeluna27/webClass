<html>
    <head>
        <link rel="stylesheet" href="registrar.css">
        <link rel="stylesheet" href="case.css">
        <title>Registro</title>
    </head>
    <header>
        
    </header>
    <body class="bodyB">
        <section class="sect">
        <form method="post" action="insertaU.php">
            
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
            <div>
                <label for="nuevoUser">Usuario</label><br>
                <label for="contra">Contraseña</label><br>
                <label for="nombre">Nombre</label><br>
                <label for="correo">Correo Electronico</label>
            </div>
            <div>
                <input type="text" name="nuevoUser" id="nuevoUser" required><br>
                <input type="password" name="contra" id="contra" required><br>
                <input type="text" name="nombre" id="nombre" required><br>
                <input type="text" id="correo" name="correo" required><br>
            </div>
            <br>
            
		<input class="btnEn" type="submit">
            
            
        </form>
        </section>
    </body>
</html>
