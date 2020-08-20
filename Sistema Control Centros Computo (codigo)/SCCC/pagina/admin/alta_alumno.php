<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="estilosSaludo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="IMG/zapato3.ico">
  

</head>
<body>

   
	<form method="post" id="formulario" action="alta_alumno.php">
    	<table id="Formu">
		 <tr>
               <td>Matricula:</td><td><input type="number" id="ma" name="ma" placeholder="matricula..." required  /></td>
           </tr>
           <tr>
               <td>Nombre:</td><td><input type="text" id="nombre" name="nombre" placeholder="nombre..."required  /></td>
           </tr>
           <tr>
               <td>Apellido:</td><td><input type="text" id="apellido" name="apellido" placeholder="apellido..."required  /></td>
           </tr>
           <tr>
               <td>Carrera:</td><td><input type="text" id="carrera" name="carrera" placeholder="carrera..."required  /></td>
           </tr>
		    <tr>
               <td>Correo electronico:</td><td><input type="email" id="correo" name="coreo" placeholder="correo..."required  /></td>
           </tr>
           
               <td colspan="2" id="cajaEnviar">
               <input type="submit" id="insertar" name="insertar" value="INSERTAR"/>
			    <p align="center"><a href="alumno.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
    
           </tr>
           <tr>
              <td colspan="2" style="text-align:center;"> 
              <?php
				include_once("conexion.php");
					$ma=$_POST['ma'];
				$nombre=$_POST['nombre'];
				$apellido=$_POST['apellido'];
				$carrera=$_POST['carrera'];
				$correo=$_POST['correo'];
               
					if(isset($_POST['insertar']))
					{ $sql=("INSERT INTO alumno (matricula,nombre,apellido,carrera,correo_electronico) values ('$ma','$nombre','$apellido','$carrera','$correo')");
					
					  if(mysqli_query(Conectar(),$sql))
					  {  echo "Insertado correctamente";
				  header("Location:modalumno.php");
				     exit();	
				  }
					  else
						{  echo "Insertado correctamente";}  
					}
				?>
              </td>
           </tr>
        </table>
    </form>
</div>
</body>
</html>