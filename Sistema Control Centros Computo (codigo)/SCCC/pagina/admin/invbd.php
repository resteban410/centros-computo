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

  	if(isset($_POST['btn1']))
  	{
  		include("dbc.php");
     
  		$nu=$_POST['nu'];
  		$equi=$_POST['equi'];
  		$marca=$_POST['marca'];
	    $modelo=$_POST['modelo'];
  		$laboratorio=$_POST['laboratorio'];
  	

  		$conn->query("INSERT INTO equipo (no_serie,numero_equipo,laboratorio_clave,marca,modelo) values ('$nu','$equi','$laboratorio','$marca','$modelo')");
header("location: inv.php");

 
  		include("cerrar_conexion.php");
		
  	}
  ?>
