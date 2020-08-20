<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>css</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="estilosSaludo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="IMG/zapato3.ico">


</head>
<body>

<?php
  include_once("conexion.php");
  $cla=$_GET['num_prestamo'];  
?>

   
	<form method="post" id="formulario" action="Modificar.php?clave=<?php echo $cla ?>" style="color:#fff;">
    	<table id="Formu">
		
		 <tr>
               <td>clave</td>
               <td><input type="text" id="clave" name="clave" placeholder="clave" value="<?php echo Consulta($cla,"num_prestamo") ?>"/></td>
           </tr>
           <tr>
		
		 <tr>
               <td>password</td>
               <td><input type="text" id="password" name="password" placeholder="password" value="<?php echo Consulta($cla,"hora") ?>"/></td>
           </tr>
           <tr>
           <tr>
               <td>Nombre</td>
               <td><input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo Consulta($cla,"nombre") ?>"/></td>
           </tr>
           <tr>
               <td>Apellido</td>
               <td><input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo Consulta($cla,"apellidos") ?>"/></td>
           </tr>
		    <tr>
               <td>telefono</td>
               <td><input type="text" id="telefono" name="telefono" placeholder="telefono" value="<?php echo Consulta($cla,"telefono") ?>"/></td>
           </tr>
		   
		    <tr>
               <td>direccion</td>
               <td><input type="text" id="direccion" name="direccion" placeholder="direccion" value="<?php echo Consulta($cla,"direccion") ?>"/></td>
           </tr>
           <tr>
           <tr>
		   
           <tr>
               <td>Correo</td>
               <td><input type="email" id="correo" name="correo" placeholder="E-mail" value="<?php echo Consulta($cla,"correo_electronico") ?>"/></td>
           </tr>
           <tr>
              
           <tr>
               <td colspan="2" id="cajaEnviar">
               <input type="submit" id="guardar" name="guardar" value="GUARDAR CAMBIOS"/>
           </tr>
           <tr>
              <td colspan="2" style="text-align:center;"> 
				<?php
				include_once("conexion.php");
				$clave=$_POST['clave'];
				$password=$_POST['password'];
				$nombre=$_POST['nombre'];
				$apellidos=$_POST['apellido'];
				$telefono=$_POST['telefono'];
                 $direccion=$_POST['direccion'];

				$correo=$_POST['correo'];

					if(isset($_POST['guardar']))
					{ $sql="UPDATE docente SET clave = '$clave', password = '$password', nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono', direccion = '$direccion', correo_electronico = '$correo' WHERE clave= $cla;";
					  if(mysqli_query(Conectar(),$sql))
					  {  //echo "Cambios almacenados correctamente";
						  header("Location:fin.php");
					  }
					  else
						{  echo "Error, verifique";}  
					}
				?>
              </td>
           </tr>
        </table>
    </form>



</div>
</body>
</html>