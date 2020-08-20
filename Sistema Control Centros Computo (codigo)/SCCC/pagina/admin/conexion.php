<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
error_reporting(0);
function Conectar()
{
	$host= "localhost";
	$user= "root";
	$pw="";
	$bd="control";
    $conexion=mysqli_connect($host, $user, $pw, $bd) or die ("PROBLEMAS DE CONEXION A LA BASE DE DATOS");
	//mysql_select_db($bd,$conexion) or die("NO SE RECONOCE LA BASE DE DATOS");
	return $conexion;

}

  function Consulta($clavesilla,$campo)
  {//$clave=$_GET['clave'];
   $consulta="Select * from docente where clave=".$clavesilla.";";
   $resul=mysqli_query(Conectar(),$consulta) or die ("Error:");
   $fila=mysqli_fetch_array($resul);
   return $fila[$campo];
  }

?>
