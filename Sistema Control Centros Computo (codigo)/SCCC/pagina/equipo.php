<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CONTROL DE LABORATORIO</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini MENU -->
      <span class="logo-mini"><b>CONTROL DE LABORATORIO</b></span>
      <!-- MENU ESTENDIDO -->
      <span class="logo-lg"><b>CONTROL DE LABORATORIO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
              <li class="header">SISTEMA</li>
              <li class="footer">
                <a href="#">notificaciones</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="descarga.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">CONTROL DE LABORATORIO</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="descarga.jpg" class="img-circle" alt="User Image">
                <p>
                 CONTROL DE LABORATORIO
                  <small>Creada a partir del 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
             <li class="user-body">
                <div class="row">
               <p align="center"><a href="cambiar_ad.php">Cambiar contraseña</a></p>
				<!--<p align="center"><a href="cambia_us.php">Cambiar contraseña de usuario</a></p>-->
                  <div class="col-xs-4 text-center">
                    <a href="#">
					<form action="index.html">
							<input  class="btn btn-flat" type="submit" name="Enviar" id="Enviar" value="Salir" />
					</form></a>
                  </div>
				  
                </div>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              </li>
            </ul>
          </li>
		  
        </ul>
      </div>
    </nav>
 
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="descarga.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>INGRESAR</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Conectado</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
      

      </form>
     
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bienvenido Administrador
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Contenido</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      
      </div>
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
            
              
			  <li class="pull-left header"><i class="fa fa-inbox"></i> REGISTRO DE COMPUTADORAS EN EL LABORATORIO!</li>
            </ul>
          </div>
		<div class="nav-tabs-custom">
		
		  </div>
		  
		  <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              
			  
			  <form id="form1" name="form1" method="post" action="equi.php">
			  
			  
			  
<table border="0" cellspacing="0">			  
<tr>
      <td>
  <table width="200" border="1" cellspacing="0">
	

    <tr>
	  <td><FONT COLOR="#000000">id de equipo: </FONT></td>
      <td><label for="clave"></label>
      <input type="text" name="id_equipo" id="id_equipo" required/></td>
    </tr>
	
    <tr>
      <td><FONT COLOR="#000000">Nombre del laboratorio: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="id_laboratorio" id="id_laboratorio" required/></td>
    </tr>
	
	 <tr>
      <td><FONT COLOR="#000000">Nombre de la marca: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="id_marca" id="id_marca" required/></td>
    </tr>
	
	    <tr>
      <td><FONT COLOR="#000000">Nombre del software: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="id_software" id="id_software" required/></td>
    </tr>

     <tr>
		<td><FONT COLOR="#000000">Nombre de la computadora ejemplo cp1: </FONT></td>
      <td><label for="clave"></label>
      <input type="text" name="cp" id="cp" required/></td>
    </tr>
	
    <tr>
      <td><FONT COLOR="#000000">Nombre del mause: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="mause" id="mause" required/></td>
    </tr>
	
	 <tr>
      <td><FONT COLOR="#000000">Descripcion del mause: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="des_mause" id="des_mause" required/></td>
    </tr>
	
	 <tr>
      <td><FONT COLOR="#000000">Nombre del teclado: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="teclado" id="teclado" required/></td>
    </tr>
	
	 <tr>
      <td><FONT COLOR="#000000">Descripcion del teclado </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="des_tecla" id="des_tecla" required/></td>
    </tr>
	
	 <tr>
      <td><FONT COLOR="#000000">Nombre del cpu: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="cpu" id="cpu" required/></td>
    </tr>
	
	<tr>
      <td><FONT COLOR="#000000">Descripcion del cpu </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="des_cpu" id="des_cpu" required/></td>
    </tr>
	<tr>
	
		 <tr>
      <td><FONT COLOR="#000000">Nombre de la pantalla: </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="pantalla" id="pantalla" required/></td>
    </tr>
	
	<tr>
      <td><FONT COLOR="#000000">Descripcion de la pantalla </FONT></td>
      <td><label for="Nombre"></label>
      <input type="text" name="des_pantalla" id="des_pantalla" required/></td>
    </tr>
	<tr>
      <td><input  class="btn btn-flat" type="submit" name="Enviar" id="Enviar" value="Enviar"/>
	  </td>
    </tr>
  </table>
  
  
  </td>
  <td>
  <table id="c" width="200" border="0" cellspacing="0" style="display:none">
  <tr>
  <td><FONT COLOR="#000000">Carreras</FONT></td>
	
	</tr>
	<tr>
	<td>
	<textarea name="carreras" rows="10" cols="40"></textarea>
	</td>
    </tr>
	
	</table>
	</td>
    </tr>
	</table>
</form>
            </ul>
          </div>         
          <div class="box box-primary">
         
          </div>
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>
              <h3 class="box-title">Recidido</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            </div>
            <div class="box-footer clearfix">
              <!--<button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>-->
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitantes
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitantes</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Logueados</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Existo</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
          
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="knob-label">Grupos</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="knob-label">Redes</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="knob-label">Invitados</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
           
			
			
            <!-- /.box-header -->
            <div class="box-body no-padding">
              
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                 
                  

                  
                </div>
                <!-- /.col -->
              
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1
    </div>
    <strong>EMPRESA 2016-2017 <a href="login.html">OJA</a></strong> Derechos reservados
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
     

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
        </ul>
      </div>
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <div class="tab-pane" id="control-sidebar-settings-tab">
      </div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
