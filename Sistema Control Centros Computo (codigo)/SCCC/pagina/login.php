
<?php
	session_start();
	    include 'dbc.php';
	    $uid = $_POST['user'];
	    $pwd = $_POST['pass'];
	    
	    $sql = "SELECT * FROM docente WHERE clave='$uid'"; 
	    $result = mysqli_query($conn, $sql); 
            echo $pwd;
            echo $uid;
	    if(!$row = mysqli_fetch_assoc($result))
	    {
			
	        header("Location: index.php?error=empty");
	        exit();
	    }
	    else
	    {
                if($row['password'] == $pwd)
                {
                    //$_SESSION['id'] = $row['password'];
					$_SESSION['id'] = $row['clave'];
                    header("Location: docente_pres.php");
                    exit();
                }
	    }
		
            //header("Location: index.php");
?>