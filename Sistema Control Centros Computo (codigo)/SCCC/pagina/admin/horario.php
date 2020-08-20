<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location: index.php?error=empty");
	exit();
    }
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
	
  <?php

  	if(isset($_POST['btn1']))
  	{
  		include("dbc.php");
     
  		$fecha=$_POST['fecha'];
  		$hora=$_POST['hora'];
  		$docente=$_POST['docente'];
		$laboratorio=$_POST['laboratorio'];
  	

  		$conn->query("INSERT INTO prestamo (num_prestamo,dia,hora,fecha_prestamo,estado,docente_clave,laboratorio_clave) values ('','','$hora','$fecha','libre','$docente','$laboratorio')");
header("location: admin_horario.php");

 
  		include("cerrar_conexion.php");
		
  	}
  ?>
