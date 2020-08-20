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

   
	<form method="post" id="formulario" action="alta_equipo.php">
    	<table id="Formu">
	
		
		 Marca:..                          <input type="text" id="marca" name="marca" placeholder="hp" required  /></td>
		 
          
           </tr>
           <tr>
		      <td>Modelo:</td><td><input type="text" id="modelo" name="modelo" placeholder="G42"required  /></td>
              
           </tr>
           <tr>
		    <td>No Serie:</td><td><input type="text" id="serie" name="serie" placeholder="MYL12345678" required /></td>
		   
               
           </tr>
           <tr>
		    <td>No Equipo:</td><td><input type="number" id="equipo" name="equipo" placeholder="1"/></td>
               
           </tr>
		   
			 <td>Laboratorio:</td><td>
              <input type="radio" name="1" value="1" checked>Robotica
              <input type="radio" name="1" value="2"> Programacion
              <input type="radio" name="1" value="3"> Diseño
  </td><br><br>
  
           </tr>
		   
           
               <td colspan="2" id="cajaEnviar">
               <input type="submit" id="insertar" name="insertar" value="INSERTAR"/>
			    <p align="center"><a href="inv.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
    
           </tr>
           <tr>
              <td colspan="2" style="text-align:center;"> 
              <?php
				include_once("conexion.php");
					$serie=$_POST['serie'];
				$equipo=$_POST['equipo'];
				$laboratorio=$_POST['1'];
				$marca=$_POST['marca'];
				$modelo=$_POST['modelo'];
               
					if(isset($_POST['insertar']))
					{ $sql=("INSERT INTO equipo (no_serie,numero_equipo,laboratorio_clave,marca,modelo) values ('$serie','$equipo','$laboratorio','$marca','$modelo')");
					
					  if(mysqli_query(Conectar(),$sql))
					  {   header("Location:inv.php");
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