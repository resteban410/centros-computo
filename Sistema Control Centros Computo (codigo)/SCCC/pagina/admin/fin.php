<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BD's TEAM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="estilosSaludo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="IMG/zapato3.ico">
 
    <script type="text/javascript" src="auxiliar.js"></script>

</head>
<body>

<?php
  include_once("conexion.php");
  $cla=$_GET['clave'];  
?>


   </div> <!--Cierre del div del banner-->
   
	<form method="post" id="formulario" style="color:#fff; width:350px;" action="fin.php">
    	<table id="Formu">
           <tr>
               <td colspan="2" style="text-align:center; font-size:25px;">Operación realizada con</td>
           </tr>
           <tr>
               <td colspan="2" style="text-align:center; font-size:30px;">EXITO
               </td>
           </tr>
           
           <tr>
               <td colspan="2" id="cajaEnviar">
               <a href="alta.php" class="ligaBtn">IR A INSERTAR</a> <br><br>
               <a href="consulta.php" class="ligaBtn">IR A CONSULTAR</a>
               </td>
           </tr>
        </table>
    </form>

<?php
	
?>

</div>
</body>
</html>