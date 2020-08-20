<?php
# Preparo los datos para conectarme a la DB
	 $host = 'localhost';
	 $usuario = 'root';
	 $clave = '';
	 $db = 'estructura';

	$id_equipo = $_POST['id_equipo'];
	$id_laboratorio = $_POST['id_laboratorio'];
    $id_marca = $_POST['id_marca'];
	$id_software = $_POST['id_software'];
	$cp = $_POST['cp'];
	$mause = $_POST['mause'];
    $des_mause = $_POST['des_mause'];
	$teclado = $_POST['teclado '];
	$des_teclado = $_POST['des_teclado '];
	$cpu = $_POST['cpu'];
    $des_cpu= $_POST['des_cpu'];
	$pantalla = $_POST['pantalla'];
    $des_pantalla = $_POST['des_pantalla'];
	
	//$laboratorio = $_POST['laboratorio'];
	
	 # me conecto a la DB
	$conn = mysqli_connect($host, $usuario, $clave,$db);// or die('No me pude realizar la conexión al servidor');
	//$conn = mysql_connect($host, $usuario, $clave);// or die('No me pude realizar la conexión al servidor');
	if( !$conn ){
		echo "No me pude reali ar la conexión al servidor";
	}
	else{//else de la conexion
		# Selecciono la DB a utilizar
		$base = mysqli_select_db($conn,$db);// or die('No pude seleccionar la base de datos');
		if( !$base ){
			echo "No pude seleccionar la base de datos";
		// or die('No pude seleccionar la base de datos');
		} else {
		$existente = false;
			$sql = "SELECT id_equipo FROM `equipo`";
			# Ejecuto la consulta
			$result = mysqli_query( $conn,$sql );# or die('No pude ejecutar la consulta');
			if(!$result){
				echo "No pude ejecutar la consulta1";
				die('Not connected : ' . mysqli_error($conn));
			}
			else{
				while ($fila = mysqli_fetch_assoc($result)){
					if( $fila['clave'] ===$clave_esc ){
						session_start();
						$existente = true;
					}							
				}//fin while maestro
				//	echo "las contrasena es incorrecta";
			}
			if($existente == false){	
	//echo "_".$telefono."_";
				$query="INSERT INTO  `equipo` (`id_equipo` ,`id_laboratorio`,`id_marca` ,`id_software `,`cp`,`mause `,`des_mause`,`teclado`,`des_teclado`,`cpu`,`des_cpu`,`pantalla`,`des_pantalla`)VALUES('$id_equipo', '$id_laboratorio', '$id_marca', '$id_software ', '$cp', '$mause', '$des_mause ', '$teclado', '$des_teclado', '$cpu', '$des_cpu', '$pantalla', ' des_pantalla')";

				# Ejecuto la consulta
				mysqli_query( $conn,$query ) or die("No pude ejecutar la insercion".mysqli_error($conn));	
  	
						} else {
						}
			header ("Location: ./administracion.php");		
			
		}//base
	}//conexion
	
?>