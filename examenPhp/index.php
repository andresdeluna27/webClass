<html>
<head>
	<title>inicio</title>
</head>
<header>
	<section>logo</section>
	<a href="nuevo.php">login</a>
</header>
<body>
	<section>imagen</section>
	<?php
    session_start();
	if(isset($_SESSION)){
		$usu=$_SESSION['usuario'];
		echo "<p>$usu</p><br><a href=\"#\">logout</a>";
		##header("location:accede.php");
	}else{
		echo "<a href=\"nuevo.php\">registrarse</p>";
        echo "<a href=\"login.php\">login</p>";
	}
	?>
</body>
</html>
