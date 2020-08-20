
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
<title> asignar</title>
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
	<div >
	</div>
	<form id="formulario" name="formulario1" action="test.php" method="POST">
	<input type="hidden" name="operation" value="Asignar">
	<br><label>Fecha de inicio(Debe ser Lunes)</label>
	<input type="date" name="fechaI" required>
	<br><label>Fecha de Fin</label>
	<input type="date" name="fechaF" required>
		Selecciona el Laboratorio
		<?php
			$link = mysqli_connect("localhost", "root", "");
			mysqli_select_db($link, "control");
			$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
			$sql = "SELECT clave,nombre FROM laboratorio";
			$result = mysqli_query($link, $sql );
			// mysqli_data_seek ($result, 0);
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($link));
			} else {
				echo '<select name="laboratorio">';
				while ($fila = mysqli_fetch_assoc($result)){
					echo '<option value="'.$fila ['clave'].'">'.$fila['nombre'].'</option>';
				}
				echo '</select>';				
			}
		?>
	<table border="1" id="horario">
		<tr>
			<td colspan="6">
			Hprario escolar
			</td>
		</tr>
		<tr>
			<td width="100px">
				Hora
			</td>
			<td>
				Lunes
			</td>
			<td>
				Martes
			</td>
			<td>
				Miercoles
			</td>
			<td>
				Jueves
			</td>
			<td>
				Viernes
			</td>
		</tr>
		<?php
			$link = mysqli_connect("localhost", "root", "");
			mysqli_select_db($link, "control");
			$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	/*		$sql =  "select clave,materia.nombre as nombreMat,docente.nombre as nombre,apellidos from materia inner join materia_docente on materia.nrc=materia_docente.nrcmd inner join docente on materia_docente.clavemd=docente.clave";
			$result = mysqli_query($link, $sql );
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($link));
			} else {
				$docente = array();
				while ($fila = mysqli_fetch_assoc($result)){
					$opciones[] = '-'.$fila ['nombreMat'].'-'.$fila ['nombre'].' '.$fila['apellidos'];
					$claves[] = $fila ['clave'];
				}
			}	*/		   
			$sql =  "select clave, nombre, apellidos from docente where clave<>0";
			$result = mysqli_query($link, $sql );
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($link));
			} else {
				$docente = array();
				while ($fila = mysqli_fetch_assoc($result)){
					$docentes[] = $fila ['nombre'].' '.$fila['apellidos'];
					$clavedocs[] = $fila ['clave'];
				}
			}
		?>
		<?php
			$h = array("08:00 - 09:00","09:00 - 10:00","10:00 - 11:00","11:00 - 12:00","12:00 - 13:00","13:00 - 14:00");
			// $semana = array("lunes[]","martes[]","miercoles[]","jueves[]","viernes[]");			
			
			for($i=0;$i<6;$i++){
			echo "<tr>";
				echo "<td>".$h[$i]."</td>";
				for($j=0;$j<5;$j++){
					echo "<td>";
					?>
    	<table>
		 <tr>
               <td>NRC:</td><td><input type="text" id="nrc" name="nrc<?php echo $i.$j?>" placeholder="NCC430288"></td>
           </tr>
           <tr>
               <td>Nombre:</td><td><input type="text" id="nombre" name="nombre<?php echo $i.$j?>" placeholder="robotica" ></td>
           </tr>
		    <tr>
				<td>nombre del docente:</td><td><!-- <input type="text" id="docente_clave" name="docente_clave" placeholder="laura"/required/>-->
			   
				<?php
					$n = count( $clavedocs );
					echo '<select name="docente'.$i.$j.'">';
					for($k=0;$k<$n;$k++){		
						//echo '<input type="checkbox" name="docente'.$i.$j.'[]" value="'.$clavedocs[$k].'">'.$docentes[$k];
						echo '<option value="'.$clavedocs[$k].'">'.$docentes[$k].'</option>';				
					}
					echo '</select>';	
				?>
				</td>
           </tr>
        </table>
		<?php
					echo "</td>";
				}
				echo "</tr>";
			}		
		?>
	</table>
	<input type="submit">
	</form>	
		
<table width="800" height="1"  border="0" cellspacing="0" cellpadding="0" > 


</table> 
	
     <!--                
       <p align="center"><a href="alta_horario.php"style=""> <img src="iconos/cale.png"  title="altahorario" width="50" height="51" border="0" />Agregar horario</a></p>
  -->
   <table width="100" height="50" ALIGN=center border="0" cellspacing="0" cellpadding="0" >
 <td width="90">&nbsp;</td>
    <td width="50"><form id="form2" name="form2" method="post" action="">
      <p align="center"><a href="menu_admin.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
   
    </form>    </td>
      
	   </td>
  </tr>
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















