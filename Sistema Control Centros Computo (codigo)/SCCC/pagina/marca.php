<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <h2>Marcas Disponibles</h2>
 <table>
 <tr>
 <td>
 <?php
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "control");
	$sql = "SELECT * from marca";
			$result = mysqli_query($link, $sql );
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($link));
			} else {
			echo '<table border="1">
				 <tr>
					 <td colspan="2">Marca</td>
				 </tr>';
				 $i=0;
				while ($fila = mysqli_fetch_assoc($result)){
					echo '<tr>
					<td width="200" ><input id="m'.$i.'"type="text" value="'.$fila['nombre'].'" disabled style="border:none; background-color: #FFFFFF;" >';
					echo '<button id="bm'.$i.'" onclick="modificar(m'.$i.'.id)">Modificar</button>';
					
					echo '<div>';
					
					echo '<form action="1.php" method="post">					
					<input type="hidden" name="id_marca" value="'.$fila['id_marca'].'">
					<input name="nombre" id="tm'.$i.'" type="text" value="'.$fila['nombre'].'" style="display:none;">';
					
					echo '<button name="operation" id="gm'.$i.'" style="display:none;" value="guardar_marca" >Guardar</button>
					</form>';
					echo '<button id="cm'.$i.'" onclick="cancelar(m'.$i.'.id)" style="display:none;">Cancelar</button>';
					echo '<div>';
					
				//	echo '</td>';
				//	echo '<td>';				
					
					echo '</td><td valign="top" >
					<form action="1.php" method="post">
					<input type="hidden" name="id_marca" value="'.$fila['id_marca'].'">
					<button name="operation" value="eliminar_marca" >Eliminar</button>
					</form>
					</td>
					</tr>';
					// $Fecha[] = array($fila ['num_prestamo'],$fila ['fecha_prestamo'],$fila ['hora'],$fila ['HoraTermino'],$fila['nombre'],$fila['apellidos'],$fila['tipo']);
					// $estatus = 'ocupado';
					$i++;
				}
				echo '</table>';
			}
?>
 </td>
 <td>
 <form action="1.php" method="post">					
					
					<input name="nombre" type="text">
					<button name="operation" value="agregar_marca" >Agregar</button>
					</form>
 </td>
 </tr>
 </table>
<script>
	function modificar(v){
		//alert(v);
		//document.getElementById(v).disabled = false;
		document.getElementById(v).style.display = 'none';
		document.getElementById('g'+v).style.display = 'block';
		document.getElementById('b'+v).style.display = 'none';
		document.getElementById('t'+v).style.display = 'block';
		document.getElementById('c'+v).style.display = 'block';		
	}
	function cancelar(v){
		//alert(v);
		//document.getElementById(v).disabled = false;
		document.getElementById(v).style.display = 'block';
		document.getElementById('g'+v).style.display = 'none';
		document.getElementById('b'+v).style.display = 'block';
		document.getElementById('t'+v).style.display = 'none';
		document.getElementById('c'+v).style.display = 'none';		
	}
//document.getelementbyId()
</script>
</body>
</html>