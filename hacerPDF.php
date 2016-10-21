<?php
require('fpdf/fpdf.php');
$pdf=new FPDF();
	$pdf->AddPage();
$servidor="127.0.0.1";
    $usuario="root";
    $cont="holamundo";
    $bd="app1";
    
    $login=$_SESSION['usuario'];
    $conn=mysqli_connect($servidor,$usuario,$cont,$bd);
		if($conn){
			##echo "<br>conexion exitosa";
		}else{
		  die("<br>Error de conexion:".$conn->connect_error);
		}
    
    $resp = mysqli_query($conn, "select * from usuarios where login ='$login'");
if ($fila= $resp->fetch_row()) {
	##echo "<br>Nombre: ".$fila[2];
	##echo "<br>Usuario: ".$fila[0];

	##echo "<br>Contraseña: ".$fila[1];
	$texto="Nombre: ".$login." jaja";
	
 
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(50,10,'Información del usuario',1,1,'L');
 
	$pdf->Cell(50,5,'salto de linea',1,1);
 
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(190,5,$texto);
 
	$pdf->Output();

}

?>
