<?php
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'control';
    $conn = mysqli_connect($host,$db_user,$db_password,$db_name)or die("No se pudo realizar la conexion");
    if(!$conn)
    {
        echo "Error";
    }
	?>