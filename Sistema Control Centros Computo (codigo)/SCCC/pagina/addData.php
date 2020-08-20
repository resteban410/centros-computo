<?php
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
<title> Docente</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 24px;
	font-weight: bold;
}
-->
 
<!-- 
a{text-decoration:none} 
a:hover{text-decoration: underline ; color:black;} 
--> 
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

<P ALIGN=center> <FONT FACE="arial" SIZE=5 COLOR="#00b5e2"> <b> Verifica tus datos </b><br> </FONT></DIV>

    
        <header>
            <div id="head">
                <ul>
                    
                   
                </ul>
            </div>
        </header>
        <div id = "content" align="center">
                <?php
                        include 'dbc.php';
                        // $type = $_POST['type'];
						$fecha = $_POST['fecha'];
                         // $di = $_SESSION['id'];
						// switch($type)
                        // {
                            // case "Docente":
                                // $id = $_POST['DataID'];
                                // $sql = "SELECT * FROM prestamo WHERE num_prestamo = '$id'";
                                // $result = mysqli_query($conn, $sql);
                                // $row = mysqli_fetch_assoc($result);
                               
							    // if(isset($row))
                                // {
								$hrI = $_POST['horaI'];
								$hrT = $_POST['horaT'];
								
								echo '<form method = "POST" action="1.php" enctype="multipart/form-data">';
								echo '<input type="hidden" name="operation" value="Registrar">';
								echo '<input type="hidden" name="type" value="Docente">';
								echo '<input type="hidden" name="docente" value="'.$_SESSION['id'].'">';
								echo '<input type="hidden" name="tipo" value="P">';
								echo '<input type="hidden" name="laboratorio" value="'.$_POST['laboratorio'].'">';
								echo '<input type="hidden" name="fecha" value="'.$fecha.'">';
								echo '<div> <strong> Fecha: </strong> '.$fecha.'</textarea></div>';
								echo '<div> <strong> Hora de inicio: </strong> <input type="time" name="hora" value="'.$hrI.'" min="'.$hrI.'" max="'.$hrT.'" >';
								echo '<div> <strong> Hora de termino: </strong> <input type="time" name="horat" value="'.$hrT.'" min="'.$hrI.'" max="'.$hrT.'" >';
								echo '<div> <strong> Materia </strong>';
								
								$link = mysqli_connect("localhost", "root", "");
								mysqli_select_db($link, "control");
								$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
								$sql = "SELECT nrc, materia.nombre as materia from materia join materia_docente on materia.nrc=materia_docente.nrcmd
								where materia_docente.clavemd=".$_SESSION['id'];
								$result = mysqli_query($link, $sql );
								// mysqli_data_seek ($result, 0);
								if(!$result){
									echo "No pude ejecutar la consulta1";
									die('Not connected : ' . mysqli_error($link));
								} else {
									echo '<select name="materia">';
									while ($fila = mysqli_fetch_assoc($result)){
										echo '<option value="'.$fila ['nrc'].'">'.$fila['materia'].'</option>';
									}
									echo '</select>';				
								}
								echo '<button>Solicitar</button>';
								echo "</form>";
                                // // }
                                // break;
                           

					

								
// ///////////////////////////////////////////////////////////////////////////////////////////////////////								
                        // } //fin del switch
                
// //////////////////////////////////////////////////////////////////////////////////////////////////////				
				
				?>
				
			
				
     <table width="100" height="50" ALIGN=center border="0" cellspacing="0" cellpadding="0" >
 <td width="90">&nbsp;</td>
    <td width="50"><form id="form2" name="form2" method="post" action="">
      <p align="center"><a href="pr.php"><img src="iconos/1.PNG" width="50" height="51" border="0" /></a> </p>
   
    </form>    </td>
      
	   </td>
  </tr>
</table>
           				

 <br>   Versión: 1.00 </br>
<table>
 
</table>
<p>&nbsp;</p>
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
<script type="text/javascript">
function test(){
	alert('hola');
	//alert(document.getElementById('hora').value);
}
</script> 


</html>