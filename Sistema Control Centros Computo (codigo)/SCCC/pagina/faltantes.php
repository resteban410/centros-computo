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
$consulta= "SELECT *FROM docente WHERE clave='".$id_usuario."'";
  $fe = date("Y/m/d"); //aqui la fecha actual 
  
  date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');

$hora=strftime("%H:%M:%S");

  	if(isset($_POST['btn1']))
  	{
  		include("dbc.php");
     
  		
  		$nl=$_POST['1'];
  		$ne=$_POST['nuE'];
	
  		$co=$_POST['comen'];
  	

  		$conn->query("INSERT INTO faltantes (no_falla,no_equipo,no_laboratorio,fecha_perdida,hora,observaciones) values ('','$ne','$nl','$fe','$hora','$co')");
header("location: avisar_faltantes.php");

 
  		include("cerrar_conexion.php");
		
  	}
  ?>
