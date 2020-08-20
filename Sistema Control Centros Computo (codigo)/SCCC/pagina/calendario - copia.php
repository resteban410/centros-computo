<?php
	if (isset($_POST['anterior'])) {
			date_default_timezone_set('america/Monterrey');
			$currentMonth=date("n");
			$currentYear=date("Y");
			$month = $_POST['mes'];
			$year = $_POST['anio'];
		if( $year >= $currentYear && ($month > $currentMonth || $month < $currentMonth ) ){
	
		// echo "buscare un mes anterior";
		if($_POST['mes']>1){
			
			$month = $_POST['mes']-1;
			$year = $_POST['anio'];
			
		} else {
			$month = 12;
			$year = $_POST['anio']-1;
		}
		
		}
		$diaActual = $_POST['dia'];
		// echo $year."_";
		// echo $month."_";
		// echo $diaActual."_";
	} else if(isset($_POST['siguiente'])){
	if($_POST['mes']<12){
		$month = $_POST['mes']+1;
		$year = $_POST['anio'];
	} else {
		$month = 1;
		$year = $_POST['anio']+1;
	}
	// echo "buscare el mes siguiente";	
	$diaActual = $_POST['dia'];
	// echo $year."_";
	// echo $month."_";
	// echo $diaActual."_";

	} else{
		date_default_timezone_set('america/Monterrey');
		# definimos los valores iniciales para nuestro calendario
		$month=date("n");
		$year=date("Y");
		$diaActual=date("j");
	}
# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));

$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<!--http://www.lawebdelprogramador.com-->
	<title>Ejemplo de un simple calendario en PHP</title>
	<link rel="stylesheet" href="calendario.css">
	<meta charset="utf-8">

</head>
 
<body>
<h1>Ejemplo de un simple calendario en PHP</h1>


<table id="panelcal" border="0">
	<tr>
		<td style="border: 1px solid black;">
			<table id="calendar">
				<caption class="mes">				
					<form name="formX" id="formX" method="post" action="calendario.php">				
						<input type="hidden" name="anio" value="<?php echo $year;?>">
						<input type="hidden" name="mes" value="<?php echo $month;?>">
						<input type="hidden" name="dia" value="<?php echo $diaActual;?>">
						
						<input id="botonp" style="color:#fff" type="submit" name="anterior" value="<<" />
						<?php echo $meses[$month]." ".$year?>
						<input id="botonp" style="color:#fff" type="submit" name="siguiente" value=">>" />
					</form>	
				</caption>
				<tr class="calendario">
					<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
				</tr>
				<tr>
	<?php
	//SELECT * FROM `prestamo` WHERE 1 and `fecha_prestamo`='2017-05-10'	
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
			//echo "<td><label background=\"red\" onclick=\"alert('entraste en el area del contenedor')\">Click me</label>&nbsp;</td>";
			// echo "";
		}else{
			//$Fecha;
			if($day<10)
				$day='0'.$day;

			if($month<10)
				$month='0'.$month;

			// $sql = "SELECT * FROM `prestamo` WHERE 1 and `fecha_prestamo` like '2017-10-$day' ORDER BY  `prestamo`.`fecha_prestamo` ASC ,  `prestamo`.`hora` ASC "; 
			//	SELECT * FROM `prestamo` WHERE 1 and `fecha_prestamo` like '2017-10-%' ORDER BY  `prestamo`.`fecha_prestamo` ASC ,  `prestamo`.`hora` ASC
			//$sql = "SELECT fecha_prestamo,hora,HoraTermino,nombre, apellidos FROM prestamo INNER JOIN docente ON (prestamo.docente_clave = docente.clave ) and `fecha_prestamo` like '2017-10-$day' ORDER BY  `prestamo`.`fecha_prestamo` ASC ,  `prestamo`.`hora` ASC ";
			$sql = "SELECT num_prestamo, fecha_prestamo, hora, HoraTermino, nombre, apellidos, tipo FROM prestamo INNER JOIN docente ON (prestamo.docente_clave = docente.clave ) and `fecha_prestamo` like '2017-$month-$day' ORDER BY  `prestamo`.`fecha_prestamo` ASC ,  `prestamo`.`hora` ASC ";
			$result = mysqli_query($link, $sql );
			// mysqli_data_seek ($result, 0);
			//$extraido= mysqli_fetch_array($result);
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($link));
			} else {
				// echo "<table border='1'>";
				// echo "<tr>";
				// echo "<th>fecha</th><th>hora</th><th>docente</th>";
				// echo "</tr>";
				//	$j = 0;
				$estatus = 'libre';
				while ($fila = mysqli_fetch_assoc($result)){
					// echo '<tr>';
					// echo '<td>'.$fila ['fecha_prestamo'].'</td><td>'.$fila ['hora'].'</td><td>'.$fila['docente_clave'];
					// echo '</tr>';
					$Fecha[] = array($fila ['num_prestamo'],$fila ['fecha_prestamo'],$fila ['hora'],$fila ['HoraTermino'],$fila['nombre'],$fila['apellidos'],$fila['tipo']);
					$estatus = 'ocupado';
					//print_r($Fecha);

					//	$j = $j+1;
				}
				// echo "</table>";
			}
			//echo $year."-".$month."-".$diaActual;
			// mostramos el dia
			// if($day==$diaActual)					
			echo "<td><button class=\"$estatus\" onclick=\"buscarFecha($year,$month,$day)\" > $day</button></td>";//echo "<td><button onMouseover=\"alert('entraste en el area del contenedor')\">$day</button></td>";
			// else
			// echo "<td><button onclick=\"buscarFecha($year,$month,$day)\" >$day</button></td>";
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
		echo '<table id="NoPrestamo"  border="0"  style="display:none">';
		// echo '<caption></caption>';
		echo '<tr>';
		echo '<td style="align:center;">';
		echo 'No hay ningun préstamo para esta fecha';
		echo '<form id="solPrest" name="solPrest" method="POST" action="addData.php">		
			<input type="hidden" name="fecha" id="fecha" value=""> 
			<input type="submit" value="Hacer solicitud" name="SolPrest" id="SolPrest"  >';
													/*Aqui mandaremos las horas*/
												echo	'<input type="hidden" name="horaI" value="08:00">
														<input type="hidden" name="horaT" value="20:00">';
			
			
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
				//foreach ($v1 as $v2) {
				//echo "$v1[0] \n";
				//$t = explode("-",$v1[0]);
				//echo $t[2].".";
				//echo $fa;
				if( $fa === '-'){							//********************* La primera fecha del mes
					echo '<table class="horario" id="'.$v1[1].'"  border="0" style="display:none">';
					echo '<caption >Prestamos para '.$v1[1].' </caption>';
					echo '<tr class="calendario">';
					echo '<td>Hora Inicio&nbsp;&nbsp;</td><td>Hora Termino&nbsp;&nbsp;</td><td colspan="2">Nombre docente&nbsp;&nbsp;</td><td></td>';
					echo '</tr>';

									if((int)substr($hrI,0,2)<(int)substr($v1[2],0,2) ){
									echo '<tr>';
												echo '<td class="D izquierda" colspan="4">';
													echo "<center>Tiempo disponible 1_</center>";
												echo '</td>';
												
												echo '<td class="D derecha"style="align:center;">';
												echo '<form id="solPrest" name="solPrest" method="POST" action="AddData.php">
													<input type="hidden" name="fecha" value="'.$v1[1].'"> 
													<input type="hidden" name="horaI" value="'.$hrI.'"> 
													<input type="hidden" name="horaT" value="'.$v1[2].'"> 
													
													<input type="submit" id="botonp" value="Solicitar" >
													</form>';
												echo '</td>';		
											echo '</tr>';
									}
									$hrI = $v1[2];

					
					echo '<tr>';
					// echo '<td>';
					// echo $v1[0];
					// echo '</td>';
					echo '<td class="'.$v1[6].' izquierda">';
					echo $v1[2];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[3];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[4];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[5];
					echo '</td>';

					echo '<td class="'.$v1[6].' derecha">';
					echo '<form method="POST" action="1.php">
					<input type="hidden" name="fpr" id="fpr" value="'.$v1[0].'"> 
					<input type="hidden" name="operation" value="Cancelar">
					<input type="submit" id="botonp" value="Cancelar" >
					</form>';
					echo '</td>';
					echo '</tr>';
					
					$uhr = $v1[3];
					
					$hayTabla = True;
				} else if( $fa === $v1[1] ){//cuando la fecha sea la misma
				
				
									if((int)substr($uhr,0,2)<(int)substr($v1[2],0,2) ){
										echo '<tr>';
												echo '<td class="D izquierda" colspan="4">';
													echo "<center>Tiempo disponible 2_</center>";
												echo '</td>';
												
												echo '<td class="D derecha"style="align:center;">';
												echo '<form id="solPrest" name="solPrest" method="POST" action="AddData.php">
													<input type="hidden" name="fecha" value="'.$v1[1].'"> 
													<input type="hidden" name="horaI" value="'.$hrI.'"> 
													<input type="hidden" name="horaT" value="'.$v1[2].'"> 
													
													<input type="submit" id="botonp" value="Solicitar" >
													</form>';
												echo '</td>';		
											echo '</tr>';
									}
									$hrI = $v1[2];
				
				
					echo '<tr>';
					echo '<td class="'.$v1[6].' izquierda">';
					echo $v1[2];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[3];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[4];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[5];
					echo '</td>';

					echo '<td class="'.$v1[6].' derecha">';
					echo '<form method="POST" action="1.php">
					<input type="hidden" name="cpr" id="cpr" value="'.$v1[0].'">
					<input type="hidden" name="operation" value="Cancelar">
					<input type="submit" id="botonp" value="Cancelar" name="SolPrest" >
					</form>';
					echo '</td>';
					echo '</tr>';
					$uhr = $v1[3];

				} else if( $fa <> $v1[1] ){						// *******************************cuando la fecha sea diferente
				
				
											/* antes de 8pm */
											if ((int)substr("20",0,2)>(int)substr($uhr,0,2)){//antes del cierre
											echo '<tr>';
												echo '<td class="D izquierda" colspan="4">';
													echo "<center>Tiempo disponible antes de 8pm_1</center>";
												echo '</td>';												
												echo '<td class="D derecha"style="align:center;">';
												echo '<form id="solPrest" name="solPrest" method="POST" action="AddData.php">
													<input type="hidden" name="fecha" value="'.$fa.'"> 
													<input type="hidden" name="horaI" value="'.$uhr.'"> 
													<input type="hidden" name="horaT" value="20:00"> 
													
													<input type="submit" id="botonp" value="Solicitar" >
													</form>';
												echo '</td>';		
											echo '</tr>';
										}
				
					echo '</table>';
					echo '<table class="horario" id="'.$v1[1].'"  border=0" style="display:none">';
					echo '<caption >Prestamos para '.$v1[1].' </caption>';
					echo '<tr class="calendario">';
					echo '<td>Hora Inicio&nbsp;&nbsp;</td><td>Hora Termino&nbsp;&nbsp;</td><td colspan="2">Nombre docente&nbsp;&nbsp;</td><td></td>';
					echo '</tr>';				
					
					
											$hrI="08:00";
											if((int)substr($hrI,0,2)<(int)substr($v1[2],0,2) ){
												echo '<tr>';
												echo '<td class="D izquierda" colspan="4">';
													echo "<center>Tiempo disponible 3_</center>";
												echo '</td>';
												
												echo '<td class="D derecha"style="align:center;">';
												echo '<form id="solPrest" name="solPrest" method="POST" action="AddData.php">
													<input type="hidden" name="fecha" value="'.$v1[1].'"> 
													<input type="hidden" name="horaI" value="'.$hrI.'"> 
													<input type="hidden" name="horaT" value="'.$v1[2].'"> 
													
													<input type="submit" id="botonp" value="Solicitar" >
													</form>';
												echo '</td>';		
												echo '</tr>';
											}

											$hrI = $v1[2];


					
					echo '<tr>';
					echo '<td class="'.$v1[6].' izquierda">';
					echo $v1[2];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[3];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[4];
					echo '</td>';

					echo '<td class="'.$v1[6].'">';
					echo $v1[5];
					echo '</td>';
					echo '<td class="'.$v1[6].' derecha">';
					echo '<form method="POST" action="1.php">
					<input type="hidden" name="cpr" id="cpr" value="'.$v1[0].'"> 
					<input type="hidden" name="operation" value="Cancelar">
					<input type="submit" id="botonp" value="Cancelar" name="Prest"  >
					</form>';
					echo '</td>';
					echo '</tr>';
					$uhr = $v1[3];
					
					//ultima hora registrada
				}
				$fa = "".$v1[1];
				//echo $fa;

			}
			
									/* Antes de 8 pm */
										if ((int)substr("20",0,2)>(int)substr($v1[3],0,2)){//antes del cierre
											echo '<tr>';
												echo '<td class="D izquierda" colspan="4">';
													echo "<center>Tiempo disponible antes de 8pm_2</center>";
												echo '</td>';
												
												echo '<td class="D derecha"style="align:center;">';
												echo '<form id="solPrest" name="solPrest" method="POST" action="AddData.php">
													<input type="hidden" name="fecha" value="'.$fa.'"> 
													<input type="hidden" name="horaI" value="'.$uhr.'"> 
													<input type="hidden" name="horaT" value="20:00"> 
													
													<input type="submit" id="botonp" value="Solicitar" >
													</form>';
												echo '</td>';		
											echo '</tr>';
}
			
			if($hayTabla)
				echo '</table>';
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
	
	document.getElementById('fecha').value = fecha;
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
</html>
