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

   
	<form method="post" id="formulario" action="alta_software.php">
    	<table id="Formu">
		 <tr>
               Clave de producto:<input type="text" id="serie" name="serie" placeholder="5124..."required  /></td>
           </tr>
           <tr>
               <td>Nombre Software:</td><td><input type="software" id="software" name="software" placeholder="java..."required  /></td>
           </tr>
           <tr>
               <td>Descripcion:</td><td><input type="descripcion" id="descripcion" name="descripcion" placeholder="programacion..."required  /></td>
           </tr>
           <tr>
               <td>No equipo:</td><td><input type="number" id="equipo" name="equipo" placeholder="6..."required  /></td>
           </tr>
		    <tr>
               <td>Laboratorio:</td><td>
              <input type="radio" name="1" value="1" checked>Robotica
              <input type="radio" name="1" value="2"> Programacion
              <input type="radio" name="1" value="3"> Diseño
         </tr>
           
               <td colspan="2" id="cajaEnviar">
               <input type="submit" id="insertar" name="insertar" value="INSERTAR"/>
			    <p align="center"><a href="software.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
    
           </tr>
           <tr>
              <td colspan="2" style="text-align:center;"> 
              <?php
				include_once("conexion.php");
					$serie=$_POST['serie'];
				$software=$_POST['software'];
				$descripcion=$_POST['descripcion'];
				$equipo=$_POST['equipo'];
				$laboratorio=$_POST['1'];
               
					if(isset($_POST['insertar']))
					{ $sql=("INSERT INTO software_instalado (clave_software,nombre,descripcion,equipo,laboratorio) values ('$serie','$software','$descripcion','$equipo','$laboratorio')");
					
					  if(mysqli_query(Conectar(),$sql))
					  {  echo "Insertado correctamente";
				   header("Location:software.php");
				     exit();	}
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