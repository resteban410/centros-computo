<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8" />
	<title>Carga de Materias</title>
	</head>
<body>
	<div >
	</div>
	<form action="1.php" method="POST">
		<input type="hidden" name="operation" value="Asignar">
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
		<br><label>Fecha de inicio(Debe ser Lunes)</label>
		<input type="date" name="fecha">
		<table border="1" id="Lunes" >
			<tr>	   
				<td colspan="3">
					Lunes
				</td>				
			</tr>
			<tr>	   
				<td>
					Hora de Inicio
				</td>
				<td>
					Hora de fin
				</td>
				<td>
					Profesor
				</td>
			</tr>
			<tr id="docentes0">
				<td>
					<input type="time" name="horaI[]" value="08:00" id="hi0">
				</td>
				<td >
					<input type="time" name="horaT[]" value="09:00" id="ht0">
				</td>
					<td>			
						<?php
							//SELECT * FROM `prestamo` WHERE 1 and `fecha_prestamo`='2017-05-10'	
							$link = mysqli_connect("localhost", "root", "");
							mysqli_select_db($link, "control");
							$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
							$sql = "SELECT clave,nombre,apellidos FROM docente";
							$result = mysqli_query($link, $sql );
							// mysqli_data_seek ($result, 0);
							//$extraido= mysqli_fetch_array($result);
							if(!$result){
								echo "No pude ejecutar la consulta1";
								die('Not connected : ' . mysqli_error($link));
							} else {
								//$estatus = 'libre';
								echo '<select id="docentes" name="docentes[]">';
								echo '<option value="vacio">Vacío</option>';
								echo '<option value="0">Autoacceso</option>';
								while ($fila = mysqli_fetch_assoc($result)){
									echo '<option value="'.$fila ['clave'].'">'.$fila ['nombre'].' '.$fila['apellidos'].'</option>';
									//$Fecha[] = array($fila ['nombre'],$fila ['apellidos'],$fila ['hora'],$fila ['HoraTermino'],$fila['nombre'],$fila['apellidos'],$fila['tipo']);
									//$estatus = 'ocupado';					
								}
								echo '</select>';				
							}
						?>
			
			</td>
		</tr>
	   </table>
	   <input type="submit">
   <input type="button" id="btn_agregar" value="Agregar campo" onclick="crearDin()">
   
   </form>
   <!--
   <input type="button" id="btn_agregar" value="-" onclick="quitar()">
   <input type="button" id="btn_agregar" value="s" onclick="s()">
   -->
	
	<!--<input type="text" value="hola" id="test">-->
	
	
 <script>
	i=0;
	function crearDin(){
	
	var contenedor = document.getElementById("Lunes");
	//var fila = document.getElementById('docentes'+i);
	
	
	var fila = document.createElement("tr");
	
	var celdahi = document.createElement("td");
	var celdaht = document.createElement("td");
	var celdapr = document.createElement("td");
	var horai = document.createElement("input");
	var horat = document.createElement("input")
	horai.type = "time";
	horat.type = "time";
	horai.value = document.getElementById('ht'+i).value;
	i=i+1;
		
	haux = horai.value.substring(0, 2);
	haux = parseInt(haux, 10)+1;

	if(haux<10)
		ha = "0"+haux+":00";
	else 
		ha = ""+haux+":00";
	//haux = (int)substr(horai.value,0, 2)+1;
	
	//alert(haux);
	
	horat.value = ha;//horai.value;
	horai.name = "horaI[]";
	horat.name = "horaT[]";
	
	horai.id = 'hi'+i; 
	horat.id = 'ht'+i; 
	
	var o = document.getElementById("docentes");
	var n = o.cloneNode( true );	
	
	celdaht.appendChild(horat);	
	celdahi.appendChild(horai);
	celdapr.appendChild(n);
	
	fila.appendChild( celdahi );
	fila.appendChild( celdaht );
	fila.appendChild( celdapr );

	contenedor.appendChild(fila);
	
	}
	
	function quitar(){
		elem = document.getElementById();
		p = elem.parentNode();
		p.removeChild( elem );		
	}
	
	function s(){
		document.getElementById('hi0').value = document.getElementById('hi0').value+strToSeconds('01:00:00');
	}

	  
   </script>
 </body>
</html>