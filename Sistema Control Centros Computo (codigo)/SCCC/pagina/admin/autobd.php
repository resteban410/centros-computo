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
  $id = $_SESSION['id'];
$consulta= "SELECT * FROM autoservicios WHERE clave='".$id_usuario."'";
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$startDate = date("Y/m/d");
$hora_actual=strftime("%H:%M:%S");
  	if(isset($_POST['btn1']))
  	{
		
  		include("dbc.php");
    	$matricula=$_POST['mat'];
  		$lab=$_POST['1'];
  		$actividad=$_POST['act'];
		
		$hof=$_POST['hof'];
      

  	

  		$conn->query("INSERT INTO autoservicios (folio,hora_inicio,hora_fin,fecha,actividad,laboratorio_clave,administrador_id,alumno_matricula) values ('','$hora_actual','$hof','$startDate','$actividad','$lab','$id','$matricula')");
header("location: menu_admin.php");

 
  		include("cerrar_conexion.php");
		
  	}
  ?>
