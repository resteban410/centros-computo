
<html>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>insertar datos en hacer prestamo</h1></center>
  	<form method="POST" action="1.php" >

  	<div class="form-group">
	    <label for="doc">numero</label>
	    <input type="text" name="nu"  class="form-control" id="nu" >
	</div>

	<div class="form-group">
	    <label for="nombre">dia </label>
	    <input type="text" name="di" class="form-control" id="di">
	</div>

   <div class="form-group">
	    <label for="dir">hora </label>
	    <input type="text" name="hor" class="form-control" id="hor">
	</div>

	<div class="form-group">
	    <label for="tel">fecha_prestamo </label>
	    <input type="text" name="fec" class="form-control" id="fech">
	</div>
	
	<div class="form-group">
	    <label for="tel">docente </label>
	    <input type="text" name="do" class="form-control" id="do">
	</div>
	<div class="form-group">
	    <label for="tel">laboratorio </label>
	    <input type="text" name="lab" class="form-control" id="lab">
	</div>
	
	<div class="form-group">
	    <label for="tel">disponibilidad </label>
	    <input type="text" name="dis" class="form-control" id="dis">
	</div>
	<div class="form-group">
	    <label for="tel">estado </label>
	    <input type="text" name="es" class="form-control" id="es">
	</div>
    
    <center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>

  </form>
  

<table width="100" height="50" ALIGN=center border="0" cellspacing="0" cellpadding="0" >
 <td width="90">&nbsp;</td>
    <td width="50"><form id="form2" name="form2" method="post" action="">
      <p align="center"><a href="docente_pres.php"><img src="iconos/ingresar.PNG" width="50" height="51" border="0" /></a> </p>
      <p align="center">regresar </p>
    </form>    </td>
      
	   </td>
  </tr>
</table>

  


  </div>
  <div class="col-md-4"></div>
</div>

  
  
</body>
</html>
<?php
//Proceso de conexión con la base de datos
$conex = mysql_connect("localhost", "root", "")
		or die("No se pudo realizar la conexion");
	mysql_select_db("control",$conex)
		or die("ERROR con la base de datos");

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';
}

$id_usuario = $_SESSION['id_usuario'];
$consulta= "SELECT *FROM docente WHERE clave='".$id_usuario."'"; 
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);

?>



<?php
$conexion = mysql_connect("localhost", "root", "")
		or die("No se pudo realizar la conexion");
	mysql_select_db("control",$conex)
		or die("ERROR con la base de datos");

		
$consulta = "SELECT * FROM prestamo WHERE docente_clave LIKE '".$id_usuario."'";

$resultado = mysql_query($consulta, $conexion) or die(mysql_error());


$table = "<table border='1' ALIGN=center  cellpadding='10'>\n";
$table .= "<tr><th>num prestamo</th><th>dia</th><th>hora</th><th>fecha</th><th>docente</th><th>laboratorio</th><th>disponibilidad</th><th>estado</th>\n";
while($fila = mysql_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["num_prestamo"]."</td>
      <td>".$fila["dia"]."</td>
      <td>".$fila["hora"]."</td>
      <td>".$fila["fecha_prestamo"]."</td>
      <td>".$fila["docente_clave"]."</td>
      <td>".$fila["laboratorio_clave"]."</td>
	  <td>".$fila["disponibilidad"]."</td>
	   <td>".$fila["estado"]."</td>
     

	
      </form></td>
   </tr>\n";
    }
$table .= "</table>\n"; 
  
?>





<!DOCTYPE HTML>
<html>
<head>
<title>Eliminar registros de una tabla con Mysql y PHP</title>
</head>
<body>

<?php 

/* Mostrar la tabla con los registros */
echo $table; 

?>

</body>
</html>

<?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>
