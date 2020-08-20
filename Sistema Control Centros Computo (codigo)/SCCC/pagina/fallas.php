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
  

  	if(isset($_POST['btn1']))
  	{
  		include("dbc.php");
     
  		$ne=$_POST['nuE'];
	    $nombre=$_POST['1'];
  		$co=$_POST['comen'];
  	

  		$conn->query("INSERT INTO fallas (numero_de_fallas,fecha_de_reporte,fecha_de_atencion,descripcion,docente_clave,administrador_id,equipo_no_serie,nombre_laboratorio) values ('','$fe','','$co','$id','1','$ne','$nombre')");
header("location: avisar_fallas.php");

 
  		include("cerrar_conexion.php");
		
  	}
  ?>
