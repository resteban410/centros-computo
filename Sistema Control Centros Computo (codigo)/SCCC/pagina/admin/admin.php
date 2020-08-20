<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    
    
    
    
    
    
            <title>Login System</title>
            
            <link href="login-box.css" rel="stylesheet" type="text/css" /> <!--Ubicacion y nombre de la hoja de estilos -->

<style type="text/css"> <!-- indica el inicio de la hojja de  estilos -->

.Estilo1  <!-- indica una clase de estilos a ocupar -->
{
font-family: Geneva, Arial, Helvetica, sans-serif } <!-- indica el tipo de letra -->
    
	body,td,th <!-- indica que parte del código de html se van a ocupar los estilos -->
	{
	color: #000;  
	font-weight: bold;
	}
}

</style>  <!-- indica el fin de los estilos -->

            
            
            
            
    </head>
    <left>
    <body background="images/bg.jpg" OnContextMenu="return false"> <!-- indica el fondo de la página web -->
 
<body>

<table width="2000" height="120"  border="0" cellspacing="0" cellpadding="0" > 
<tr> 
<TD  width="150" height="100" valign="top" bgcolor="#003b5c" ><IMG SRC="iconos/EscudoN.PNG"  width="110" height="110"></TD>
<TD  bgcolor="#003b5c" ><IMG SRC="iconos/logo.PNG"  width="150" height="65"></TD>
<td width="2000" height="120" bgcolor="#003b5c" >
</td> 
</tr> 


</table> 
<table width="1314" height="266" border="0">
  <tr>
  <h2>
****************************************************<br />
Acceso a SanJose chiapa  BUAP<br />
****************************************************<br />
</h2>
</p>

<br/>
<b>administrador</b><br/>
- Ingresa tu ID de trabajador como Número de Identificación de Docente <b>"ID Docente".</b><br/>
- Contraseña como <b>"NIP"</b>.<br/>
<p>  Posteriormente, oprima el botón <b>"Acceso"</b>. <p>Para proteger tu privacidad, por favor dá clic en salir y cierra tu navegador al terminar la sesión.</p>
     
    <center>
        <header>
        <center>
            <nav>
            
                <ul>
                <center>
                   
                    </center>
                    <center>
                        <a href="admin.php">solo administradores</a>
                        </center>
                      
                    
                    <?php
                        if(isset($_SESSION['id']))
                        {
                           
                              echo ' <a href="docente_pres.php">INICIO</a>';
                            echo "<form action='logout.php'>
                                    <button>CERRAR SESION</button>
                                </form>";
                        }
                    ?>
                </ul>
                
            </nav>
            </center>
        </header>  
        </center>
        <div id = "frm" align="left">
                <form action="loginadmin.php" method="POST">
                <p>
                
                <div id="login-box" align="left"> <!-- Agrupa un bloquue de elementos usando una clase de estilos -->
                        <br>
                        <br>
                        <br>
                      
                        <strong>ID Docente:</strong><input type="text" id="user" name="user"/>
                </p>
                <p>
                       
                       <strong>NIP:</strong> <input type="password" id="pass" name="pass"/>
                </p>
                <p>
                       
						 <input type="image" name="imageField"  src="iconos/entrar.PNG"  value="Iniciar sesion"/> <br><strong>ACCESO:</strong>
                        </div>
					
                </p>
			
				 Versión: 1.00

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
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
</html>