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

   
	<form method="post" id="formulario" action="alta_horario.php">
    	<table id="Formu">
		 <tr>
               <td>hora</td><td><input type="text" id="hora" name="hora" placeholder="clave..."/></td>
           </tr>
           <tr>
               <td>fecha</td><td><input type="text" id="fecha" name="fecha" placeholder="pass..."/></td>
           </tr>
           <tr>
               <td>laboratorio</td><td><input type="text" id="laboratorio" name="laboratorio" placeholder="Nombre..."/></td>
           </tr>
          
           
           <tr>
               <td colspan="2" id="cajaEnviar">
               <input type="submit" id="insertar" name="insertar" value="INSERTAR"/>
			    <p align="center"><a href="horariosemana.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
    
           </tr>
           <tr>
              <td colspan="2" style="text-align:center;"> 
              <?php
				include_once("conexion.php");
					$hora=$_POST['hora'];
				$fecha=$_POST['fecha'];
				$laboratorio=$_POST['laboratorio'];
				
					if(isset($_POST['insertar']))
					{ $sql=("INSERT INTO prestamo (num_prestamo,dia,hora,fecha_prestamo,estado,docente_clave,laboratorio_clave) values ('','','$hora','$fecha','libre','0','$laboratorio')");
					
					  if(mysqli_query(Conectar(),$sql))
					  {  echo "Insertado correctamente";}
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