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
      
	  
///////////////////////////////////////////////////////////////

	  
	  
	  switch($operation)
      {
          case "Add":
          {
			  
                  switch ($type)
                  {
                    case "Docente":
                        
						$ho = $_POST['ho'];
                        $do = $_POST['do'];
                        $fe = $_POST['fe'];
                        $es = $_POST['es'];
                        $la = $_POST['la'];
                        $ho = stripcslashes($ho);
                        $do = stripcslashes($do);
                        $fe = stripcslashes($fe);
                        $es = stripcslashes($es);
                        $la = stripcslashes($la);
                        $sql = "INSERT INTO prestamo VALUES values ('','$ho','$do','$fe','$es','$la')";
                        $result = mysqli_query($conn, $sql);
                        if($result)
                        {
                            echo "Registro subido exitosamente";
                            header("Location:pr.php");
                            exit();			
                        }
                        else
                        {
                            echo "Ocurrio un error";
                            header("Location:nnnnn.php");
                            exit();		
                        }
                        break;
						
/////////////////////////////////////////////////////////////////////////////////////////////////////7

					
/////////////////////////////////////////////////////////////////////////////////////////////////////////
						
           
						
//////////////////////////////////////////////////////////////////////////////////////////////////////////

            


/////////////////
          }
          break;
        }
?>
