<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location: index.php?error=empty");
	exit();
    }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Docente</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 24px;
	font-weight: bold;
}
-->
 
<!-- 
a{text-decoration:none} 
a:hover{text-decoration: underline ; color:black;} 
--> 
</style>
</style>
</head>



<body>

<table width="2000" height="30"  border="0" cellspacing="0" cellpadding="0" > 
<tr> 
<TD  width="800" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://mail.office365.com/"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Correo BUAP  </TD>
<TD  width="100" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://webserver1.siiaa.siu.buap.mx:81/autoservicios/twbkwbis.P_GenMenu?name=homepage" style="color:#FFFFFF;">Autoservicios</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://cmas.siu.buap.mx/portal_pprd/wb/English" style="color:#FFFFFF;" >English</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="logout.php" style="color:#FFFFFF;" >Salir</TD>
<TD  bgcolor="#003b5c">
</td> 
</tr> 
 
                    <br>
                    
                   
                </ul>
                
            </div>
            </center>
        </header>
        </center>

</table> 
<table width="800" height="1"  border="0" cellspacing="0" cellpadding="0" > 
<TD rowspan="9"><IMG SRC="iconos/logotipo.png" width="300" height="100">
</table> 





         <div  align="left" id="contenedor">
         <ul>
                   
                  
                
                     
                    
                   
                   
                    <br>
					
          
	

<TABLE  ALIGN=LEFT CELLSPACING=10>
<td>
</td>
 <P ALIGN=center> <FONT FACE="arial" SIZE=5 COLOR="#00b5e2"> <b> Reportar Alg&uacute;n Faltante</b><br> </FONT></DIV>
 <td>&nbsp;</td>
    <td colspan="2"><p>&nbsp;</p>
	 <td>&nbsp;</td>
    <td colspan="2"><p>&nbsp;</p>
	<TR>
	
		<TD width="150" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="pr.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Solicitar prestamo </TD> 
	
	  
  
		<TD width="150" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="scrip_cancelarpres.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Cancelar prestamo  </TD> 
		

		<TD width="150" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="consultar_sof_inst.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" >Consultar software instalado</TD>
	</TR>
	<TR>
		<TD width="150" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="avisar_faltantes.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Avisar Faltantes </TD> 
		
		<TD width="150" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="avisar_fallas.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Avisar fallas</TD>
   
        </p>
      </form>   
	</TR>
</TABLE>
<SCRIPT languaje="JavaScript">
function pulsar() {
alert("Tu reporte fue mandao exitosamente¡¡¡");
}
</SCRIPT>
<TABLE  ALIGN=left CELLSPACING=10>
<TD>
      <form  ALIGN=left id="form1" name="form1" method="POST" action="faltantes.php">

		    <p align="center"><strong>Laboratorio:
              <input type="radio" name="1" value="1" checked>Robotica
              <input type="radio" name="1" value="2"> Programacion
              <input type="radio" name="1" value="3"> Diseño
			  
	   <p align="center"><strong>No de equipo:
   <input type="number" name="nuE" placeholder="Ejemplo:6 " required />
   
    <p align="center"><strong>fecha:	  <?php 
    $startDate = date("Y/m/d"); //aqui la fecha actual 

    echo $startDate;
?> 	

<p align="center"><strong>Hora:  <?php 
		date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');

$hora_actual=strftime("%H:%M:%S");
echo $hora_actual;
		
		?>
	  
   <p align="right"><strong>Observaci&oacute;nes:
	<textarea name="comen" rows="5" cols="20" placeholder = "Escribe aquí tus observaciones" ></textarea>  
    
  <p> <center><input type="submit" id="insertar" name="btn1"  value="INSERTAR"/>
 
 </p>
      </form> 
	  <tr>
	  <td ALIGN=left> <br>   Versión: 1.00 </br>
<br>
<IMG SRC="iconos/web_powered_by.gif">
	  </tr>
</TD>
  
</table>




<table width="2000" height="150" border="0" cellspacing="0" cellpadding="0" > 
<tr> 
<TD  width="50" height="50" align="lef"  bgcolor="#003b5c" ><IMG SRC="iconos/EscudoN.PNG"  width="150" height="150"></TD>

<td  width="280" height="50" align="lef" bgcolor="#003b5c" >  <FONT FACE="arial" SIZE=2 COLOR="#00b5e2"> <b>Benemérita Universidad Autónoma de Puebla</b><br>
                            4 sur 104 Centro Histórico C.P. 72000 <br>
                            Teléfono +52(222) 2295500</br>
							<br><br>
                            <br>
<td  width="280" height="50" align="lef" bgcolor="#003b5c" >  <FONT FACE="arial" SIZE=2 COLOR="#00b5e2"> <br>Aviso de Protección de Datos</br>
                           Directorio Telefónico <br>
                            Correo BUAP	</br>
							Sitios BUAP
							<br>
                            <br>
 <td  bgcolor="#003b5c" align="lef" >  <FONT FACE="arial" SIZE=2 COLOR="#00b5e2"> <b>Dirección de Comunicación Institucional</b><br>
                            4 sur 303 Centro Histórico C.P. 72000 <br>
                            Teléfono +52(222) 2295500 ext. 5270 y 5281<br>
                            <br>
                            <br>
							
</FONT>
</TD>
</td> 
</td> 
</tr> 
</table> 

</body>
</html>