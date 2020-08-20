
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
				    $clave = $_POST['clave'];
                     $password = $_POST['password'];
                      $nombre = $_POST['nombre'];
                      $apellidos = $_POST['apellidos'];
                      $telefono = $_POST['telefono'];
                      $direccion = $_POST['direccion'];
					   $correo_electronico = $_POST['correo_electronico'];
					   
                  
       
                     
                    
                      $sql2 = "UPDATE  docente SET clave='$clave', password='$password',nombre='$nombre',apellidos='$apellidos',telefono='$telefono' ,direccion='$direccion', correo_electronico='$correo_electronico' WHERE clave='$itemID'";
               $result = mysqli_query($conn, $sql2);
                      if(!$result)
                      {
                            echo "error";
                          exit();	
                      }
                      else
                      {

						  header("Location:consulta1.php");
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
                        $mat = $_POST['matricula'];
                        $mat = stripcslashes($mat);
                        $sql = "DELETE FROM alumno WHERE matricula = '$mat'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:alumno.php");
                            exit();
                        }
                        else
                        {
                            header("Location:alumno.php");
                            exit();
                        }
                        break;
                        
                    case "Equipo":
                        $equip_id = $_POST['serie'];
                        $equip_id = stripcslashes($equip_id);
                        $sql = "DELETE FROM equipo WHERE no_serie = '$equip_id'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:inv.php");
                            exit();
                        }
                        else
                        {
                            header("Location:inv.php");
                            exit();
                        }
                        break;
						
					case "DOCE":
                        $clave = $_POST['clave'];
                        $clave = stripcslashes($clave);
                        $sql = "DELETE FROM docente WHERE clave = '$clave'";
                        $result = mysqli_query($conn, $sql);
                        if(!$result)
                        {
                            header("Location:consulta1.php");
                            exit();
                        }
                        else
                        {
                            header("Location:consulta1.php");
                            exit();
                        }
                        break;
                  }
          }
          break;
        }
?>
