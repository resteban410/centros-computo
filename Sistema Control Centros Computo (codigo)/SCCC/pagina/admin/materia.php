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

   
	<form method="post" id="formulario" action="alta.php">
    	<table id="Formu">
		 <tr>
               <td>NRC:</td><td><input type="text" id="nrc" name="nrc" placeholder="NCC430288"/ required/></td>
           </tr>
           <tr>
               <td>Nombre:</td><td><input type="text" id="nombre" name="nombre" placeholder="robotica"/ required/ ></td>
           </tr>
           <tr>
               <td>nombre del docente:</td><td><input type="text" id="docente_clave" name="docente_clave" placeholder="laura"/required/></td>
           </tr>
		    <tr>
               <td>laboratorio:</td><td><input type="text" id="laboratorio" name="laboratorio_clave" placeholder="autoacceso"/required/></td>
           </tr>
           <tr>
               <td>hora:</td><td><input type="text" id="" name="direccion" placeholder="Privada 10 norte"/required/></td>
           </tr>
         
           
           <tr>
               <td colspan="2" id="cajaEnviar">
               <input type="submit" id="insertar" name="insertar" value="INSERTAR"/>
			    <p align="center"><a href="consulta1.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
    
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
					if(isset($_POST['insertar']))
					{ $sql="Insert into docente values('$clave','$password','$nombre','$apellidos','$telefono','$direccion','$correo')";
					
					  if(mysqli_query(Conectar(),$sql))
						  
					  {  echo "siiiiiiiiiii";
				  header("Location:consulta.php");
				     exit();	
					  }
					  else
						{  echo "noooooooooooo";}  
					}
				?>
              </td>
           </tr>
        </table>
    </form>
</div>
</body>
</html>