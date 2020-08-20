<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
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

	<!--http://www.lawebdelprogramador.com-->
	<title>Ejemplo de un simple calendario en PHP</title>
	<link rel="stylesheet" href="calendario.css">
	<meta charset="utf-8">
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

<?php
	if(isset($_POST['laboratorio'])){
	// echo "*".$_POST['laboratorio']."*";
?>
<P ALIGN=center> <FONT FACE="arial" SIZE=5 COLOR="#00b5e2"> <b> Horario del mes </b><br> </FONT></DIV>
<?php
	
	// } else{
		date_default_timezone_set('america/Monterrey');
		# definimos los valores iniciales para nuestro calendario
		$month=date("n");
		$year=date("Y");
		$diaActual=date("j");
//	}
# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));

$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>
	<!--
<h1>Ejemplo de un simple calendario en PHP</h1>
-->

<table id="panelcal" border="0">
	<tr>
		<td style="border: 1px solid black;">
			<table id="calendar">
				<caption class="mes">	
<?php echo $meses[$month]." ".$year?>				
					
				</caption>
				<tr class="calendario">
					<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
				</tr>
				<tr>
	<?php
	
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "control");
	$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	$last_cell=$diaSemana+$ultimoDiaMes;
	// hacemos un bucle hasta 42, que es el máximo de valores que puede
	// haber... 6 columnas de 7 dias
	for($i=1;$i<=42;$i++){
		if($i==$diaSemana){
			// determinamos en que dia empieza
			$day=1;
		}
		if($i<$diaSemana || $i>=$last_cell){
			// celda vacia
			echo "<td>&nbsp;</td>";
		}else{
			//$Fecha;
			if($day<10)
				$day='0'.$day;

			if($month<10)
				$month='0'.$month;
			//$sql = "SELECT num_prestamo, fecha_prestamo, hora, HoraTermino, nombre, apellidos, tipo FROM prestamo INNER JOIN docente ON (prestamo.docente_clave = docente.clave ) and `fecha_prestamo` like '2017-$month-$day' ORDER BY  `prestamo`.`fecha_prestamo` ASC ,  `prestamo`.`hora` ASC ";
			$sql = "SELECT num_prestamo, fecha_prestamo, hora, HoraTermino, docente.nombre as nombre, apellidos, tipo, materia.nombre as materia FROM (prestamo INNER JOIN prestamo_materia on prestamo.num_prestamo = prestamo_materia.num_prestamopm )
join materia on prestamo_materia.nrcpm=materia.nrc			
join prestamo_docente on prestamo.num_prestamo=prestamo_docente.num_prestamopd

join docente on (prestamo_docente.clavepd=docente.clave)

 and `fecha_prestamo` like '$year-$month-$day' and prestamo.laboratorio_clave=".$_POST['laboratorio']." ORDER BY  `prestamo`.`fecha_prestamo` ASC ,  `prestamo`.`hora` ASC";
			$result = mysqli_query($link, $sql );
			
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($link));
			} else {
			
				// $estatus = 'libre';
				while ($fila = mysqli_fetch_assoc($result)){
					
					$Fecha[] = array($fila ['num_prestamo'],$fila ['fecha_prestamo'],$fila ['hora'],$fila ['HoraTermino'],$fila['nombre'],$fila['apellidos'],$fila['tipo'],$fila['materia']);
					// $estatus = 'ocupado';
					
				}
				// echo "</table>";
			}
							
			echo "<td><button class=\"libre\" onclick=\"buscarFecha($year,$month,$day)\" > $day</button></td>";
			
			$day++;
		}
		// cuando llega al final de la semana, iniciamos una columna nueva
		if($i%7==0){
			echo "</tr><tr>";
		}
	}
	?>
				</tr>
			</table>
		</td>
		<td valign="top" >
			<!---------------- Codigo para mostrar las citas---------------->
			<!--<p>Fechas agen</p>-->
			
			
	<?php			

		/*
		Tabla de cuando no hay registros
		*/			
		
		echo '<br>';
		echo '<table id="NoPrestamo"  border="0"  style="display:none">';
		// echo '<caption></caption>';
		echo '<tr>';
		echo '<td style="align:center;">';
		echo 'No hay nada registrado en esta fecha';
		echo '<form id="solPrest" name="solPrest" method="POST" action="addData.php">';		
		echo '</form>';
		echo '</td>';
		echo '</tr>';
		echo '</table>';

		
		/*
			Aqui se crean las tablas de las fechas existentes
		*/
		if(!empty($Fecha)){
			$fa='-';
			$hrI="08:00";
			//echo substr("abcdefghij",0,2);
			
			
			/*
			Para fechas almacenadas
			*/			
			$hayTabla = false;
			foreach ($Fecha as $v1){
			$f = explode("-", $v1[1]);

				if( $fa === '-'){							//********************* La primera fecha del mes
					echo '<table class="horario" id="'.$v1[1].'"  border="0" style="display:none">';
					// echo '<caption >Prestamos para '.$v1[1].' </caption>';
					echo '<caption >Registros para '.$f[2].' de '.$meses[$f[1]].' '.$f[0].'</caption>';
					echo '<tr class="calendario">';
					echo '<td>Hora Inicio&nbsp;&nbsp;</td><td>Hora Termino&nbsp;&nbsp;</td><td>Materia</td><td colspan="2"> Nombre docente&nbsp;&nbsp;</td>';
					echo '</tr>';
					
					echo '<tr>';
					echo '<td class="'.$v1[6].' izquierda">';
					echo $v1[2];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[3];
					echo '</td>';

					
					echo '<td class="'.$v1[6].'">';
					echo $v1[7];
					echo '</td>';
					
					
					echo '<td class="'.$v1[6].'">';
					echo $v1[4];
					echo '</td>';

					
					
					
					
					
					echo '<td class="'.$v1[6].'">';
					echo $v1[5];
					echo '</td>';
					
					
					
					echo '<td class="P derecha">';
					// echo '<form method="POST" action="1.php">
					// <input type="hidden" name="cpr" id="cpr" value="'.$v1[0].'"> 
					// <input type="hidden" name="operation" value="Cancelar">
					// <input type="submit" id="botonp" value="Cancelar" >
					// </form>';
					echo '</td>';
					echo '</tr>';
					
					$uhr = $v1[3];
					
					$hayTabla = True;
				} else if( $fa === $v1[1] ){//cuando la fecha sea la misma
				
				
					echo '<tr>';
					echo '<td class="'.$v1[6].' izquierda">';
					echo $v1[2];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[3];
					echo '</td>';

				
					echo '<td class="'.$v1[6].'">';
					echo $v1[7];
					echo '</td>';	
					
					echo '<td class="'.$v1[6].'">';
					echo $v1[4];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[5];
					echo '</td>';

					echo '<td class="P derecha">';
					// echo '<form method="POST" action="1.php">
					// <input type="hidden" name="cpr" id="cpr" value="'.$v1[0].'">
					// <input type="hidden" name="operation" value="Cancelar">
					// <input type="submit" id="botonp" value="Cancelar" name="SolPrest" >
					// </form>';
					echo '</td>';
					echo '</tr>';
					$uhr = $v1[3];

				} else if( $fa <> $v1[1] ){						// *******************************cuando la fecha sea diferente
				
						
					echo '</table>';
					echo '<table class="horario" id="'.$v1[1].'"  border=0" style="display:none">';
					// echo '<caption >Prestamos para '.$v1[1].' </caption>';
					echo '<caption >Registros para '.$f[2].' de '.$meses[$f[1]].' '.$f[0].'</caption>';
					echo '<tr class="calendario">';
					echo '<td>Hora Inicio&nbsp;&nbsp;</td><td>Hora Termino&nbsp;&nbsp;</td><td>Materia</td><td colspan="2"> Nombre docente&nbsp;&nbsp;</td>';
					echo '</tr>';				
					
					
					echo '<tr>';
					echo '<td class="'.$v1[6].' izquierda">';
					echo $v1[2];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[3];
					echo '</td>';

					
					echo '<td class="'.$v1[6].'">';
					echo $v1[7];
					echo '</td>';
					
					echo '<td class="'.$v1[6].'">';
					echo $v1[4];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[5];
					echo '</td>';
					echo '<td class="P derecha">';
					// echo '<form method="POST" action="1.php">
					// <input type="hidden" name="cpr" id="cpr" value="'.$v1[0].'"> 
					// <input type="hidden" name="operation" value="Cancelar">
					// <input type="submit" id="botonp" value="Cancelar" name="Prest"  >
					// </form>';
					echo '</td>';
					echo '</tr>';
					$uhr = $v1[3];
					
					//ultima hora registrada
				}
				$fa = "".$v1[1];
				//echo $fa;

			}
			
			if($hayTabla)
				echo '</table>';
		}
		}
	?>		
		</td>
	</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
<script type="text/javascript">
function buscarFecha(anio, mes,dia){

if(dia<10)
dia='0'+dia;

if(mes<10)
mes='0'+mes;

	fecha = anio+'-'+mes+'-'+dia;
	
	tablas = document.getElementsByTagName('table');
	
	NoPrestamo = true;
	
	for(var i=0; i<tablas.length; i++) {
		var tabla = tablas[i];	
		tab = anio+'-'+mes;//tabla.substr(0,8);
		if(tab==tabla.id.substr(0,7)){
			if(tabla.id==fecha){
				tabla.style.display = 'block';
				NoPrestamo = false;
			}else {
				tabla.style.display = 'none';
			}
		}
	}
	
	// document.getElementById('fecha').value = fecha;
	if(NoPrestamo){
		document.getElementById('NoPrestamo').style.display = 'block';
	} else {
		document.getElementById('NoPrestamo').style.display = 'none';
	}
	
//document.getElementById('panelcal').style.display = 'block';
//document.getElementById('calendar').style.display = 'block';
	// alert(document.getElementById(fecha).id);
}
</script>				
							

				

					
   <table width="100" height="50" ALIGN=center border="0" cellspacing="0" cellpadding="0" >
 <td width="90">&nbsp;</td>
    <td width="50"><form id="form2" name="form2" method="post" action="">
      <p align="center"><a href="docente_pres.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
   
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

