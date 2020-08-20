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
<title>solicitar prestamo</title>
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
<TD  width="700" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://mail.office365.com/"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Correo BUAP  </TD>
<TD  width="100" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://webserver1.siiaa.siu.buap.mx:81/autoservicios/twbkwbis.P_GenMenu?name=homepage" style="color:#FFFFFF;">Autoservicios</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://cmas.siu.buap.mx/portal_pprd/wb/English" style="color:#FFFFFF;" >English</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="index.php" style="color:#FFFFFF;" >Inicio</TD>
<TD  bgcolor="#003b5c">
</td> 
</tr> 


</table> 
<table width="800" height="1"  border="0" cellspacing="0" cellpadding="0" > 
<TD rowspan="9"><IMG SRC="iconos/logotipo.png" width="300" height="100">
<td  align="RIGHT" >  <FONT FACE="arial" SIZE=5 COLOR="#00b5e2"> <b>consulta disponibilidad de horarios </b><br>
</table>

<table width="2000" height="30"  border="0" cellspacing="0" cellpadding="0" > 
<TD  width="700" height="30" ALIGN=RIGHT bgcolor="#FFFFFF" > <FONT FACE="Arial " SIZE=2><A HREF="http://mail.office365.com/"  style="color:#00b5e2;"  style="text-decoration:none" > Mision  </TD>
<TD  width="50" height="30" ALIGN=RIGHT bgcolor="#FFFFFF" > <FONT FACE="Arial " SIZE=2><A HREF="http://webserver1.siiaa.siu.buap.mx:81/autoservicios/twbkwbis.P_GenMenu?name=homepage" style="color:#00b5e2;">Vicion </TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#FFFFFF" > <FONT FACE="Arial " SIZE=2><A HREF="http://cmas.siu.buap.mx/portal_pprd/wb/English" style="color:#00b5e2;" >Directorio</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#FFFFFF" > <FONT FACE="Arial " SIZE=2><A HREF="http://cmas.siu.buap.mx/portal_pprd/wb/English" style="color:#00b5e2;" >Contacto</TD>
<TD  bgcolor="#FFFFFF">
</table>

<table width="700" height="1"  ALIGN=RIGHT border="0" cellspacing="0" cellpadding="0" >
<TD  width="100" height="1" ALIGN=center bgcolor="#00b5e2" > 
<tr>
<TD  width="800" height="50" ALIGN=center bgcolor="#FFFFFF" > 

</table>
</td> 
</tr> 
</table> 
  <header>
            <div id="head">
              
            
                    <?php
                        if(isset($_SESSION['id']))
                        {
                            echo '<li>
                                <a href="OptionsMenu.php"></a>
                            </li>';
                            echo "<form action='logout.php'>
                                    <button>SERRAR SESION</button>
                                </form>";
                        }
                    ?>
               
            </div>
        </header>


<table width="380" height="10" ALIGN=lef border="0" cellspacing="0" cellpadding="0" >
 <tr>
<TD  width="300" height="10" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="soli_pres2.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > consultar horarios</TD>

<td width="25" height="5" ALIGN=center bgcolor=" #FFFFFF" >
	 
<TD  width="300" height="150" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="addData.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > solicitar prestamo</TD>
</tr>
	

	
	
<table width="100" height="50" ALIGN=CENTER border="0" cellspacing="0" cellpadding="0" >

<td>
	
      <form id="form1" name="form1" method="POST" action="scrip_busqueda.php">
	  <div align="center">
  	      <br/>
    Fecha de : <input type="date" id="start_date" name="start_date" value="01/01/2017" placeholder="mm/dd/yyyy"> 
    <br/>
   hasta la fecha :<input type="date" id="end_date" name="end_date" value="10/02/2017" placeholder="mm/dd/yyyy"><br/>
  <br/>
    
    <input type="hidden" id="form_sent" name="form_sent" value="true">    <input type="submit" id="btn_submit" value="Enviar"><br/>

  	      </p>
        </div>
    </form></td>
	
	<!-- DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
	
	 <?php
                        include 'dbc.php';
						
	$SDATE = $_POST['start_date'];
    $SSDATE = explode('/', $SDATE);

 
               
    $EDATE = $_POST['end_date'];
    $EEDATE = explode('/', $EDATE);

                        
                        $sql = "SELECT * FROM prestamo WHERE fecha_prestamo BETWEEN '$SDATE' AND '$EDATE'";
                        $result = mysqli_query($conn, $sql);
  ?>
 <table width="620" height="60" align="right" border="1">
    <tr>      
    
      <td width="97" bgcolor="#AED4F0"><div align="center" class="Estilo1">Dia</div></td>
      <td width="92" bgcolor="#AED4F0"><div align="center" class="Estilo1">Hora </div></td>
      <td width="92" bgcolor="#AED4F0"><div align="center" class="Estilo1">Fecha</div></td>
	  <td width="108" bgcolor="#AED4F0"><div align="center" class="Estilo1">Docente</div></td>
      <td width="93" bgcolor="#AED4F0"><div align="center" class="Estilo1">Laboratorio</div></td>
      <td width="80" bgcolor="#AED4F0"><div align="center" class="Estilo1">Estado</div></td>  
						
						
							
<?php						
						
						
                        while($row = mysqli_fetch_assoc($result))
                        {      
						
						       
                                echo "<tr> ";
                                echo '<a>';
                                    echo "<p> <td>".$row['dia']."</td></p>";
                                    echo "<p> <td>".$row['hora']." </td></p>";
                                    echo "<p> <td> ".$row['fecha_prestamo']."</td> </p>";
                                    echo "<p> <td>".$row['docente_clave']." </td> </p>";
									   echo "<p> <td> ".$row['laboratorio_clave']."</td> </p>";
                                    echo "<p> <td>".$row['estado']." </td> </p>";
									   <td><form method='post' action=''> \n
      <input type='hidden' name='num_prestamo' value='".$row["num_prestamo"]."'>
      <input type='submit' value='Solicitar'>

                               
                                    echo "</form>";
                                echo '</a>'; 
								
                        } //fn de while
						        echo '</tr>';
								echo '</table>';
						
                        
                        mysqli_close($conn);
                ?>
	
	
	
	<!-- DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
	

 

		 
	  
	  
</tr>
<td width="300" height="10" ALIGN=center bgcolor=" #FFFFFF" >
<tr>

</td>
</table>

<table width="500" height="300" ALIGN=lef border="0" cellspacing="0" cellpadding="0" >
<TD  width="250" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="scrip_cancelarpres.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Cancelar prestamo  </TD>

<td width="30" height="5" ALIGN=center bgcolor=" #FFFFFF" >
</td>


<TD  width="300" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="consultar_sof_inst.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" >Consultar software instalado </TD>

<td width="300" height="10" ALIGN=center bgcolor=" #FFFFFF" >
<tr>
<td width="300" height="5" ALIGN=center bgcolor=" #FFFFFF" >
</td>
<tr>

<TD  width="50" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="avisar_faltantes.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Avisar Faltantes   </TD>
<td width="30" height="5" ALIGN=center bgcolor=" #FFFFFF" >
</td>

<TD width="50" height="80" ALIGN=center bgcolor="#00b5e2" > <FONT FACE="Arial " SIZE=5><A HREF="avisar_fallas.php"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Avisar fallas   </TD>
</tr>
</table>

</td>

</table>



 <br>   Versión: 1.00 </br>
<table>


  
  
</table>
<p>&nbsp;</p>

<IMG SRC="iconos/web_powered_by.gif">

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
