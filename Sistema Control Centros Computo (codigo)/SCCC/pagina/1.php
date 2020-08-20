
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
?>
<?php
    //session_start();
   // if(!isset($_SESSION['id']))
   // {
      //  header("Location: index.php?error=empty");
	//exit();
   // }
    include 'dbc.php';
	$link =$conn;
	// $link = mysqli_connect("localhost", "root", "");
		// mysqli_select_db($link, "control");
		// $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
     if(isset($_POST['type']))
	 $type = $_POST['type'];
     $operation = $_POST['operation'];
      switch($operation)
      {
	  
	  
	  
	
	
		//Asignar horario por materia
		case "Asignar":
			$laboratorio_clave = $_POST['laboratorio'];
			$fecha_prestamo = $_POST['fecha'];
			// $estado = $_POST['estado'];
			//$num_prestamo = stripcslashes($num_prestamo);
			 //$hora = stripcslashes($hora);
			 //$horat = stripcslashes($horat);
			$fecha_prestamo = stripcslashes($fecha_prestamo);
			$tipo = 'A';
			//$horai = $_POST['horaI'].'';
				$horat = $_POST['horaT'];
				$docente = $_POST['docentes'];;
			$i = 0;
			foreach($_POST['horaI'] as $horaI){
				//$horat[$i]
				//$docente = $_POST['docente'];
				
				//$estado = stripcslashes($estado);
				// $laboratorio_clave = stripcslashes($laboratorio_clave);
				echo "_".$hora."_".$horat."_";
				//  $sql2= "insert into prestamo(hora, HoraTermino,fecha_prestamo, docente_clave, laboratorio_clave) values ('01:00','20:00','2017-10-12',1,1)";
				//  $sql2= "insert into prestamo(hora, HoraTermino,fecha_prestamo, docente_clave, laboratorio_clave) values ('01:00','20:00','2017-10-12',1,1)";
				$sql2= "insert into prestamo(hora, HoraTermino, fecha_prestamo,tipo, docente_clave, laboratorio_clave) values ('".$horaI."','".$horat[$i]."','$fecha_prestamo','$tipo','".$docente[$i]."',$laboratorio_clave)";
				//   $sql2 = "insert into prestamo(hora) values ('20:00')";
				echo "voy a realizar la insercion";
				$result = mysqli_query($conn, $sql2);
				if(!$result){
					echo "error" or mysqli_error($conn);
					//				echo "no hice la insercion :(|)";
					exit();	
				}
				else{
	//				header("Location:docente_pres.php");
					//header("Location:calendario.php");
					//exit();			
				}
				echo "ya ejecute la insercion";
				$i = $i + 1;
			}
			header("Location:calendario.php");
			
			
		break;
	
	
	
	
	
	
	
	
	
	
	
	
	
		case "Registrar":
			//$itemID = $_POST['ID'];
			//$num_prestamo = $_POST['num_prestamo'];
			$hora = $_POST['hora'].'';
			$horat = $_POST['horat'];
			$tipo = $_POST['tipo'];
			$doc = $_POST['docente'];
			// $docente = 1;
			$nrc = $_POST['materia'];
			// $docente = $_POST['ID'];
			$fecha_prestamo = $_POST['fecha'];
			// $estado = $_POST['estado'];
			$laboratorio = $_POST['laboratorio'];
			//$num_prestamo = stripcslashes($num_prestamo);
			 //$hora = stripcslashes($hora);
			 //$horat = stripcslashes($horat);
			$fecha_prestamo = stripcslashes($fecha_prestamo);
			//$estado = stripcslashes($estado);
			// $laboratorio_clave = stripcslashes($laboratorio_clave);
			// echo "_".$hora."_".$horat."_";
			// //  $sql2= "insert into prestamo(hora, HoraTermino,fecha_prestamo, docente_clave, laboratorio_clave) values ('01:00','20:00','2017-10-12',1,1)";
			// //  $sql2= "insert into prestamo(hora, HoraTermino,fecha_prestamo, docente_clave, laboratorio_clave) values ('01:00','20:00','2017-10-12',1,1)";
			    // $sql2= "insert into prestamo(hora, HoraTermino, fecha_prestamo,tipo, materia_nrc, laboratorio_clave) values ('$hora','$horat','$fecha_prestamo','$tipo',$materia,$laboratorio_clave)";
			// //   $sql2 = "insert into prestamo(hora) values ('20:00')";
			// echo "voy a realizar la insercion";
			// $result = mysqli_query($conn, $sql2);
			// if(!$result){
				// echo "error" or mysqli_error($conn);
// //				echo "no hice la insercion :(|)";
				// exit();	
			// }
			// else{
// //				header("Location:docente_pres.php");
				// //header("Location:docente_pres.php");
				// exit();			
			// }		


			// $sql2= "select MAX(num_prestamo) as prestamos from prestamo";
			// //   $sql2 = "insert into prestamo(hora) values ('20:00')";
			// echo "voy a realizar la insercion";
			// $result = mysqli_query($conn, $sql2);
			// if(!$result){
			// echo "No pude ejecutar la consulta1";
			// die('Not connected : ' . mysqli_error($link));
		// } else {
			// while ($fila = mysqli_fetch_assoc($result)){
				// $prestamos = $fila['prestamos'];
			// }				
		// }
			
			// $sql2= "insert into prestamo_docente values ($docente,$prestamos)";
			// //   $sql2 = "insert into prestamo(hora) values ('20:00')";
			// echo "voy a realizar la insercion";
			// $result = mysqli_query($conn, $sql2);
			// if(!$result){
				// echo "error" or mysqli_error($conn);
// //				echo "no hice la insercion :(|)";
				// exit();	
			// }
			// else{
// //				header("Location:docente_pres.php");
				// //header("Location:docente_pres.php");
				// exit();			
			// }
			
			
			$sql3= "insert into prestamo(hora, HoraTermino, fecha_prestamo,tipo, laboratorio_clave) values ('$hora','$horat','$fecha_prestamo','$tipo',$laboratorio)";
			$result3 = mysqli_query($link, $sql3);
			if(!$result3){
				// echo "error" or mysqli_error($link);
				echo "No se pudo guardar prestamo";
				exit();	
			}else{
				// header("Location:docente_pres.php");
				// header("Location:calendario.php");
				//exit();			
			}
			
			
			$sql4 =  "select MAX(num_prestamo) as nprestamo from prestamo";
			$result4 = mysqli_query($link, $sql4 );
			if(!$result4){
				echo "Error Prestamo";
				// die('Not connected : ' . mysqli_error($link));
				exit();
			} else {
				while ($fila4 = mysqli_fetch_assoc($result4)){
					$nprestamo = $fila4 ['nprestamo'];
				}
			}
			
			
			
			$sql9 =  "select clavepd from prestamo_docente where clavepd='$doc' and num_prestamopd=$nprestamo";
			$result9 = mysqli_query($link, $sql9 );
			if(!$result9){
				echo "Error";
				// die('Not connected : ' . mysqli_error($link));
				exit();
			} else {
				while ($fila9 = mysqli_fetch_assoc($result9)){
					$clpd = $fila9 ['clavepd'];
				}
			}
			
			$sql5= "insert into prestamo_docente(clavepd,num_prestamopd) values ('$doc',$nprestamo)";
			$result5 = mysqli_query($link, $sql5);
			if(!$result5){
				// echo "error" or mysqli_error($link);
				echo "No se pudo asignar prestamo a docente";
				exit();	
			}else{
				// header("Location:docente_pres.php");
				// header("Location:calendario.php");
				//exit();					
			}
			
			
			
			$sql10 =  "select num_prestamopm from prestamo_materia where num_prestamopm=$nprestamo and nrcpm=$nrc";
			$result10 = mysqli_query($link, $sql10 );
			if(!$result10){
				echo "Error Materia";
				// die('Not connected : ' . mysqli_error($link));
				exit();
			} else {
				while ($fila10 = mysqli_fetch_assoc($result10)){
					$npm = $fila10 ['num_prestamopm'];
				}
			}
				
			$sql6= "insert into prestamo_materia(num_prestamopm,nrcpm) values ($nprestamo,$nrc)";
			$result6 = mysqli_query($link, $sql6);
			if(!$result6){
				// echo "error" or mysqli_error($link);
				echo "No se pudo asociar materia a prestamo";
				exit();	
			}
			else{
				// header("Location:docente_pres.php");
				// header("Location:calendario.php");
				//exit();			
			}
			
			header("Location:pr.php");
			
//			echo "ya ejecute la insercion";
		break;
		
		
		
		
		
		
		
			
		
		case "Cancelar":		
		
			$sql2 = "delete from prestamo_docente where num_prestamopd='".$_POST['cpr']."'";
			// mysqli_query($conn, $sql2);
			$result = mysqli_query($conn, $sql2);
			if(!$result){
				echo "Error eliminando de Prestamo(1) ";
				exit();	
			}
			else{
				// header("Location:marca.php");
				// exit();	
				$sql2 = "delete from prestamo_materia where num_prestamopm='".$_POST['cpr']."'";
				$result = mysqli_query($conn, $sql2);
				if(!$result){
					echo "Error eliminando de Prestamo(2) ";
					exit();	
				}
				else{
					// header("Location:marca.php");
					// exit();	
					$sql2 = "delete from prestamo where num_prestamo='".$_POST['cpr']."'";
					$result = mysqli_query($conn, $sql2);
					if(!$result){
					echo "Error eliminando de Prestamo(3) ";
					exit();	
					}
					else{
					// header("Location:marca.php");
					// exit();			
					header("Location:docente_pres.php");
					}				
				}				
			}
			
			// mysqli_query($conn, $sql2);
			
			// mysqli_query($conn, $sql2);
			
			
			
			
			
		break;
		
		case "guardar_marca":
			$nombre	= $_POST['nombre'];
			$id_marca	= $_POST['id_marca'];
			$sql2 = "UPDATE  marca SET nombre='$nombre' WHERE id_marca='$id_marca'";
			$result = mysqli_query($conn, $sql2);
			if(!$result){
				echo "error";
				exit();	
			}
			else{
				header("Location:marca.php");
				exit();			
			}
		break;
		case "eliminar_marca":
			$id_marca	= $_POST['id_marca'];
			$sql2 = "delete from marca where id_marca='".$_POST['id_marca']."'";
			$result = mysqli_query($conn, $sql2);
			if(!$result){
				echo "error";
				exit();	
			}
			else{
				header("Location:marca.php");
				exit();			
			}
		break;
		
		case "agregar_marca":
			$sql2 = "insert into marca(nombre) values ('".$_POST['nombre']."')";
			$result = mysqli_query($conn, $sql2);
			if(!$result){
				echo "error";
				exit();	
			}
			else{
				header("Location:marca.php");
				exit();			
			}
		break;
		
	  
	  
	  
          case "Add":
          {
                  switch ($type)
				  
                  {
                    case "Docente":
					     $itemID = $_POST['ID'];
                        $matricula = $_POST['matricula'];
                        $nombre = $_POST['nombre'];
                        $apellidos = $_POST['apellidos'];
                        $pass = $_POST['contrasena'];
                        $correo = $_POST['correo'];
                        
                        $matricula = stripcslashes($matricula);
                        $nombre = stripcslashes($nombre);
                        $apellidos = stripcslashes($apellidos);
                        $pass = stripcslashes($pass);
                        $correo = stripcslashes($correo);
                        $sql = "INSERT INTO docentes VALUES ('$matricula', 2, '$nombre', '$apellidos', '$pass', '$correo')";
                        $result = mysqli_query($conn, $sql);
                        if($result)
                        {
                            echo "Registro subido exitosamente";
                            header("Location:OptionsMenu.php");
                            exit();			
                        }
                        else
                        {
                            echo "Ocurrio un error";
                            header("Location:OptionsMenu.php");
                            exit();		
                        }
                        break;
                    case "Equipo":
                        $id = $_POST['id'];
                        $marca = $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $tipo = $_POST['tipo'];
                        $desc = $_POST['descripcion'];
                        $ubicacion = $_POST['ubicacion'];
                        $status = $_POST['status'];
                        
                        $id = stripcslashes($id);
                        $marca = stripcslashes($marca);
                        $modelo = stripcslashes($modelo);
                        $tipo = stripcslashes($tipo);
                        $desc = stripcslashes($desc);
                        $ubicacion = stripcslashes($ubicacion);
                        $status = stripcslashes($status);
                        $sql = "INSERT INTO equipo VALUES ('$id', '$marca', '$modelo', '$tipo', '$desc', '$ubicacion', '$status')";
                        $result = mysqli_query($conn, $sql);
                        if($result)
                        {
                            echo "Registro subido exitosamente";
                            header("Location:OptionsMenu.php");
                            exit();			
                        }
                        else
                        {
                            echo "Ocurrio un error";
                            header("Location:OptionsMenu.php");
                            exit();		
                        }
                        break;
                    case "Software":
                        $id = $_POST['id'];
                        $softname = $_POST['softname'];
                        $desc = $_POST['descripcion'];

                        $id = stripcslashes($id);
                        $softname = stripcslashes($softname);
                        $desc = stripcslashes($desc);
                        $sql = "INSERT INTO software VALUES ('$id', '$softname', '$desc')";
                        $result = mysqli_query($conn, $sql);
                        if($result)
                        {
                            echo "Registro subido exitosamente";
                            header("Location:OptionsMenu.php");
                            exit();			
                        }
                        else
                        {
                            echo "Ocurrio un error";
                            header("Location:OptionsMenu.php");
                            exit();		
                        }
                        break;
                  }
          }
          break;
          case "Update":

          {
              switch($type)
              {
                  case "Docente":
				  
				    $itemID = $_POST['ID'];
                    $num_prestamo = $_POST['num_prestamo'];
                      $hora = $_POST['hora'];
                      $docente = $_POST['docente'];
                      $fecha_prestamo = $_POST['fecha_prestamo'];
  	                  $estado = $_POST['estado'];
                      $laboratorio_clave = $_POST['laboratorio_clave'];

                      $num_prestamo = stripcslashes($num_prestamo);
                      $hora = stripcslashes($hora);
                      $fecha_prestamo = stripcslashes($fecha_prestamo);
                      $estado = stripcslashes($estado);
                      $laboratorio_clave = stripcslashes($laboratorio_clave);
                      
                      $sql2 = "UPDATE  prestamo SET num_prestamo='$num_prestamo', dia= '0',hora='$hora',fecha_prestamo='$fecha_prestamo',estado='$estado' ,docente_clave ='$docente', laboratorio_clave='$laboratorio_clave' WHERE num_prestamo='$itemID'";
               $result = mysqli_query($conn, $sql2);
                      if(!$result)
                      {
                            echo "error";
                          exit();	
                      }
                      else
                      {

						  header("Location:docente_pres.php");
                          exit();			
                      }
                  break;
                  case "Equipo":
                      $itemID = $_POST['ID'];
                      $id_equipo = $_POST['id_equipo'];
                      $marca = $_POST['marca'];
                      $modelo = $_POST['modelo'];
                      $tipo = $_POST['tipo'];
                      $desc = $_POST['desc'];
                      $ubicacion = $_POST['ubicacion'];
                      $status = $_POST['status'];
                      $id_equipo = stripcslashes($id_equipo);
                      $marca = stripcslashes($marca);
                      $modelo = stripcslashes($modelo);
                      $tipo = stripcslashes($tipo);
                      $desc = stripcslashes($desc);
                      $ubicacion = stripcslashes($ubicacion);
                      $status = stripcslashes($status);
                      
                      $sql2 = "UPDATE equipo SET ID='$id_equipo', Marca='$marca' ,Modelo='$modelo', Tipo='$tipo', Descripcion='$desc', Ubicacion='$ubicacion', Status='$status' WHERE ID='$itemID'";
                      $result = mysqli_query($conn, $sql2);
                      if(!$result)
                      {
                          header("Location:OptionsMenu.php");
                          exit();	
                      }
                      else
                      {
                          header("Location:listaInventario.php");
                          exit();		
                      }
                      break;
                  case "Software":
                      $itemID = $_POST['ID'];
                      $id_soft = $_POST['id_soft'];
                      $nombre = $_POST['nombre'];
                      $desc = $_POST['desc'];
                      $id_soft = stripcslashes($id_soft);
                      $nombre = stripcslashes($nombre);
                      $desc = stripcslashes($desc);
                      $sql2 = "UPDATE software SET ID_Registro='$id_soft', Nombre='$nombre', Descripcion='$desc' WHERE ID_Registro='$itemID'";
                      $result = mysqli_query($conn, $sql2);
                      if(!$result)
                      {
                          header("Location:OptionsMenu.php");
                          exit();	
                      }
                      else
                      {
                          header("Location:listaSoftware.php");
                          exit();		
                      }
                      break;
              }
          }
          break;
          case "Delete":
          {
              switch ($type)
                  {
                    case "Software":
                        $id = $_POST['ID'];
                        $id = stripcslashes($id);
                        $sql = "DELETE FROM software WHERE ID_Registro = '$id'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:OptionsMenu.php");
                            exit();
                        }
                        else
                        {
                            header("Location:listaSoftware.php");
                            exit();
                        }
                        break;
                        
                    case "Docente":
                        $mat = $_POST['Matricula'];
                        $mat = stripcslashes($mat);
                        $sql = "DELETE FROM docentes WHERE Matricula = '$mat'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:OptionsMenu.php");
                            exit();
                        }
                        else
                        {
                            header("Location:listaDocentes.php");
                            exit();
                        }
                        break;
                        
                    case "Equipo":
                        $equip_id = $_POST['Equipo_ID'];
                        $equip_id = stripcslashes($equip_id);
                        $sql = "DELETE FROM equipo WHERE ID = '$equip_id'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:OptionsMenu.php");
                            exit();
                        }
                        else
                        {
                            header("Location:listaInventario.php");
                            exit();
                        }
                        break;
                  }
          }
          break;
        }
?>
