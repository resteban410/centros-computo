<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location: index.php?error=empty");
	exit();
    }
    include 'dbc.php';
     $type = $_POST['type'];
     $operation = $_POST['operation'];
      switch($operation)
      {
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
                    $fecha_de_reporte = $_POST['fecha_de_reporte'];
                      $fecha_de_atencion = $_POST['fecha_de_atencion'];
                      $descripcion = $_POST['descripcion'];
                      $equipo_no_serie = $_POST['equipo_no_serie'];
  	                  $nombre_laboratorio = $_POST['nombre_laboratorio'];
                      

                      $fecha_de_reporte= stripcslashes($fecha_de_reporte);
                      $fecha_de_atencion = stripcslashes($fecha_de_atencion);
                      $descripcion = stripcslashes($descripcion);
                      $equipo_no_serie = stripcslashes($equipo_no_serie);
                      $nombre_laboratorio = stripcslashes($nombre_laboratorio);
                      
                      $sql2 = "UPDATE  fallas SET fecha_de_reporte='$fecha_de_reporte',fecha_de_atencion='$fecha_de_atencion',descripcion='$descripcion',equipo_no_serie='$equipo_no_serie' ,nombre_laboratorio ='$nombre_laboratorio'WHERE numero_de_fallas='$itemID'";
               $result = mysqli_query($conn, $sql2);
                      if(!$result)
                      {
                            echo "error";
                          exit();	
                      }
                      else
                      {

						  header("Location:cosn_fallas.php");
                          exit();			
                      }
                  break;
                  case "Equipo":
                      $itemID = $_POST['ID'];
                      $no_equipo = $_POST['no_equipo'];
                      $no_laboratorio = $_POST['no_laboratorio'];
                      $fecha_perdida = $_POST['fecha_perdida'];
                      $hora= $_POST['hora'];
                      $observaciones = $_POST['observaciones'];
                      
                      $no_equipo = stripcslashes($no_equipo);
                      $no_laboratorio = stripcslashes($no_laboratorio);
                      $fecha_perdida = stripcslashes($fecha_perdida);
                      $hora = stripcslashes($hora);
                      $observaciones = stripcslashes($observaciones);
                     
                      
                      $sql2 = "UPDATE faltantes SET no_equipo='$no_equipo', no_laboratorio='$no_laboratorio' ,fecha_perdida='$fecha_perdida', hora='$hora', observaciones='$observaciones' WHERE no_falla='$itemID'";
                      $result = mysqli_query($conn, $sql2);
                      if(!$result)
                      {
                          header("Location:cons_faltantes.php");
                          exit();	
                      }
                      else
                      {
                          header("Location:cons_faltantes.php");
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
                        $id = $_POST['clave'];
                        $id = stripcslashes($id);
                        $sql = "DELETE FROM software_instalado WHERE clave_software = '$id'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:OptionsMenu.php");
                            exit();
                        }
                        else
                        {
                            header("Location:software.php");
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
                        $no_falla = $_POST['no_falla'];
                        $no_falla = stripcslashes($no_falla);
                        $sql = "DELETE FROM faltantes WHERE no_falla = '$no_falla'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:OptionsMenu.php");
                            exit();
                        }
                        else
                        {
                            header("Location:cons_faltantes.php");
                            exit();
                        }
                        break;
                  }
          }
          break;
        }
?>
