<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location: index.php?error=empty");
	exit();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!--http://www.lawebdelprogramador.com-->
	<title>Solicitar prestamo</title>
	<link rel="stylesheet" href="calendario.css">
	<meta charset="utf-8">
<title> Docente</title>
<style type="text/css">
</style>
</style>
</head>

<body>

<table width="2000" height="30"  border="0" cellspacing="0" cellpadding="0" > 
<tr> 
<TD  width="800" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://mail.office365.com/"  TARGET="_new"  style="color:#FFFFFF;"  style="text-decoration:none" > Correo BUAP  </TD>
<TD  width="100" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://webserver1.siiaa.siu.buap.mx:81/autoservicios/twbkwbis.P_GenMenu?name=homepage" style="color:#FFFFFF;">Autoservicios</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="http://cmas.siu.buap.mx/portal_pprd/wb/English" style="color:#FFFFFF;" >English</TD>
<TD  width="70" height="30" ALIGN=RIGHT bgcolor="#003b5c" > <FONT FACE="Arial " SIZE=2><A HREF="logout.php" style="color:#FFFFFF;" >Salir</TD>
<TD  bgcolor="#003b5c">
</td> 
</tr> 
 
                    <br>
                    
                   
                </ul>
                
            </div>
            </center>
        </header>
        </center>

</table> 
<table width="800" height="1"  border="0" cellspacing="0" cellpadding="0" > 
<TD rowspan="9"><IMG SRC="iconos/logotipo.png" width="300" height="100">
</table> 
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "control");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

$semana = array("lunes","martes","miercoles","jueves","viernes");
$hri = array("08:00","09:00","10:00","11:00","12:00","13:00");
$hrt = array("09:00","10:00","11:00","12:00","13:00","14:00");

// echo $_POST['fechaI']."-> ".$_POST['fechaF']."<br>";
$fi = (int)str_replace("-","",$_POST['fechaI']);
$ff = (int)str_replace("-","",$_POST['fechaF']);
$f = explode("-",$_POST['fechaI']);
$anio = $f[0];$mes = $f[1];$dia = $f[2];
$i = 0;
$tipo = 'A';
$laboratorio = $_POST['laboratorio'];
// echo "fi=".$fi;
// echo "ff=".$ff;
echo "<br>";
while( $fi <= $ff){
//aqui va la insercion



	$d = $semana[$i];
	
	// echo '-><br>'.$d.' ';
	
	$fecha_prestamo = $anio."-".$mes."-".$dia;
	 // echo $fecha_prestamo;
	
	
	
	
	for($h=0;$h<6;$h++){
	// echo '++++++';
	// echo $hri[$h].'-'.$hrt[$h];
	// echo '<br>';
		$n = $h.$i;
		$nrc = 'nrc'.$n;
		if(isset($_POST[$nrc]) and ($_POST[$nrc]<>'')){
			// echo '-><br>'.$d.' ';
			// echo $anio."-".$mes."-".$dia."<br>";
			$nrc = $_POST[$nrc];
			// echo $nrc;
			// echo '<-nrc<br>';	
			$nombre = $_POST['nombre'.$n];
			// echo $nombre;
			// echo '<-mat<br>';
			// echo $laboratorio;
			// echo '<-lab<br>';
			// echo $_POST[$n];
			// print_r($_POST['docente'.$n]);
			//foreach($_POST['docente'.$n] as $doc){
			$doc = $_POST['docente'.$n];
				//echo $doc.'*<br>';				
				// $sql= "insert into materia (nrc, nombre, docente_clave, laboratorio_clave) values (10,'a',1,1)";
				$sql= "insert ignore into materia values (".$nrc.",'".$nombre."')";// ON DUPLICATE KEY DO NOTHING";
				// $sql2 = "insert into prestamo(hora) values ('20:00')";
				// echo "Intentando realizar insercion...";				
				$result = mysqli_query($link, $sql);				
				if(!$result){
					//echo "error" or mysqli_error($link);
					echo "No se pudo guardar materia";
					exit();	
				} else{
					//header("Location:docente_pres.php");
					//header("Location:calendario.php");
					//exit();
					
					
					$sql7 = "SELECT nrcmd FROM materia_docente where nrcmd=$nrc and clavemd='$doc'";
					$result7 = mysqli_query($link, $sql7 );
					// mysqli_data_seek ($result, 0);
					if(!$result7){
						echo "Error materia";
						die('Not connected : ' . mysqli_error($link));
						exit();
					} else {
						
						while ($fila7 = mysqli_fetch_assoc($result7)){
							$res=$fila7 ['nrcmd'];
						}
						
					}
					//echo "_".$fila7 ['nrcmd']."_";
					if($res==""){
						$sql2= "insert ignore into materia_docente(nrcmd,clavemd) values ($nrc,'$doc')";// ON DUPLICATE KEY DO NOTHING";
						$result2 = mysqli_query($link, $sql2);
						if(!$result2){
							// echo "error" or mysqli_error($link);
							echo "No se pudo asignar materia a docente";
							exit();	
						} else{
						
						
						}

					}else{

					}

					
				}
				
				
				// $sql4 =  "select MAX(num_prestamo) as nprestamo from prestamo";
				// $result4 = mysqli_query($link, $sql4 );
				// if(!$result4){
					// echo "Error";
					// // die('Not connected : ' . mysqli_error($link));
					// exit();
				// } else {
					// while ($fila4 = mysqli_fetch_assoc($result4)){
						// $nprestamo = $fila4 ['nprestamo'];
					// }
				// }
				$nprestamo="";
				$sql8 =  "select num_prestamo from prestamo where hora='".$hri[$h]."' and HoraTermino='".$hrt[$h]."' and fecha_prestamo='$fecha_prestamo' and tipo='$tipo' and laboratorio_clave=$laboratorio";
				$result8 = mysqli_query($link, $sql8 );
				if(!$result8){
					echo "Error prestamo";
						die('Not connected : ' . mysqli_error($link));
					exit();
				} else {
					while ($fila8 = mysqli_fetch_assoc($result8)){
						$nprestamo = $fila8 ['num_prestamo'];
					}
				}
				if($nprestamo==""){
					// header("Location:docente_pres.php");
					// header("Location:calendario.php");
					//exit();
					$sql3= "insert into prestamo(hora, HoraTermino, fecha_prestamo,tipo, laboratorio_clave) values ('".$hri[$h]."','".$hrt[$h]."','$fecha_prestamo','$tipo',$laboratorio)";
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
				
				}else{}
				
							// header("Location:docente_pres.php");
							// header("Location:calendario.php");
							//exit();
							// $sql3= "insert into prestamo(hora, HoraTermino, fecha_prestamo,tipo, laboratorio_clave) values ('".$hri[$h]."','".$hrt[$h]."','$fecha_prestamo','$tipo',$laboratorio)";
							// $result3 = mysqli_query($link, $sql3);
							// if(!$result3){
								// echo "error" or mysqli_error($link);
								// echo "No se pudo guardar prestamo";
								// exit();	
							// }else{
								// // header("Location:docente_pres.php");
								// // header("Location:calendario.php");
								// //exit();			
							// }
				
				
				
				
				
				$clpd = "";
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
				if($clpd==""){
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
				}
				
				$npm="";
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
				if($npm==""){
				
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
					}
					
					
			//}			
			// echo '**<br>';
			
			
			
			
		} else {
			continue;
		}
	}
	
	
	
	
			// echo '_______________<br>';
	$i = $i + 1;

	if($i>4){
		$i = 0;
		$dia = $dia + 3;
	}
	else {$dia = $dia + 1;}
	// echo "(".$i.")"."<br>";
	//insercion
	//echo $anio."-".$mes."-".$dia."<br>";
	
	if($dia>cal_days_in_month(CAL_GREGORIAN,$mes,$anio)){
		// $dia=1;
		$dia = $dia - cal_days_in_month(CAL_GREGORIAN,$mes,$anio);
		$mes = $mes+1;
		if($mes >12){
			$mes = 1;
			$anio = $anio + 1;
		}
	}

	if($dia<10){
	$dia = "0".$dia;
	}
	$mes=(int)$mes;
	// echo "*".$mes."*";
	if(((int)$mes)<10){
	$mes = "0".$mes;
	}
	// if($dia<10){
		// $fi = (int)str_replace("-","",$anio."-".$mes."-0".$dia);
		// echo "x";
		// }
	// else{
		// $fi = (int)str_replace("-","",$anio."-".$mes."-".$dia);
		// echo "y";
		// }
		
		$fi=$anio.$mes.$dia;
		
		//$fi = (int)str_replace("-","",$anio."-".$mes."-".$dia);
		
// echo "->".$fi;
		// echo "[";
// echo ($fi<$ff);
// echo "]";


		
}




// header("Location:calendario.php");
?>
Datos Almacenados correctamente
<IMG SRC="iconos/web_powered_by.gif">

<table width="2000" height="150" border="0" cellspacing="0" cellpadding="0" > 
<tr> 
<TD  width="50" height="50" align="lef"  bgcolor="#003b5c" ><IMG SRC="iconos/EscudoN.PNG"  width="150" height="150"></TD>

<td  width="280" height="50" align="lef" bgcolor="#003b5c" >  <FONT FACE="arial" SIZE=2 COLOR="#00b5e2"> <b>Benemérita Universidad Autónoma de Puebla</b><br>
                            4 sur 104 Centro Histórico C.P. 72000 <br>
                            Teléfono +52(222) 2295500</br>
							<br><br>
                            <br>
<td  width="280" height="50" align="lef" bgcolor="#003b5c" >  <FONT FACE="arial" SIZE=2 COLOR="#00b5e2"> <br>Aviso de Protección de Datos</br>
                           Directorio Telefónico <br>
                            Correo BUAP	</br>
							Sitios BUAP
							<br>
                            <br>
 <td  bgcolor="#003b5c" align="lef" >  <FONT FACE="arial" SIZE=2 COLOR="#00b5e2"> <b>Dirección de Comunicación Institucional</b><br>
                            4 sur 303 Centro Histórico C.P. 72000 <br>
                            Teléfono +52(222) 2295500 ext. 5270 y 5281<br>
                            <br>
                            <br>
</FONT>
</TD>
</td> 
</td> 
</tr> 
</table> 

</body>
</html>