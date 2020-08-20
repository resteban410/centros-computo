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
$consulta= "SELECT *FROM impreciones WHERE clave='".$id_usuario."'";
$startDate = date("Y/m/d");
  	if(isset($_POST['btn1']))
  	{
		
  		include("dbc.php");
    	$admin=$_POST['id_usuario'];
  		$lab=$_POST['1'];
  		$impre=$_POST['impre'];
    

  	

  		$conn->query("INSERT INTO impreciones (clave,impreciones,fecha,laboratorio_clave,administrador_id) values ('','$impre','$startDate','$lab','$id')");
header("location: menu_admin.php");

 
  		include("cerrar_conexion.php");
		
  	}
  ?>
