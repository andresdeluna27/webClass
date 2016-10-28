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
	if(isset($_SESSION)){
		$usu=$_SESSION['usuario'];
		echo "<p>$usu</p><br><a href=\"#\">logout</a>";
		##header("location:accede.php");
	}else{
		echo "<a href=\"nuevo.php\">registrarse</p>";
	}
	?>
</body>
</html>
