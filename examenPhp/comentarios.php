<html>
    <head>
        <title>Comentarios</title>
        <link rel="stylesheet" href="comen.css">
    </head>
    <body>
        <form method="post" action="agregarComen.php">
            <section class="sectC">
        <label for="comentario">
            añadir comentario
        </label>
        <textarea maxlength="255" id="texto" name="texto"></textarea>
        <input type="submit">
            </section>
        </form>
        <?php
        session_start();
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
        $id=$_POST['id'];
        echo "$id id";
        $_SESSION['id']=$id;
        $resp=mysqli_query($conexion,"SELECT * FROM comentarios WHERE idImagen='$id'");
        
        while($fila=$resp->fetch_row()){
            echo "$fila[0]";
            echo "<section class=\"sectC\">
                <div class=\"divInfo\">
                $fila[4]
                </div>
                <div class=\"divInfo\">
                $fila[1] $fila[2]
                </div>
                <br>
                <textarea maxlength=\"255\" readonly>
                $fila[3]
                </textarea>
                </section>";
        }
        ?>
        <section class="sectC">
            <div class="divInfo">
                publicador
            </div>
            <div class="divInfo">
                fecha y hora
            </div>
            <br>
            <textarea maxlength="255" readonly>
            </textarea>
        </section>
    </body>
</html>