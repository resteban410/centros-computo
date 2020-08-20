<?php
$semana = array("lunes","martes","miercoles","jueves","viernes");
$hri = array("08:00","09:00","10:00","11:00","12:00","13:00");
$hrt = array("09:00","10:00","11:00","12:00","13:00","14:00");
//print_r( $d );
// for($d=0;$d<5;$d++){
	// //print_r( $_POST[$dia]);
		
	// for( $_POST[$semana[$d]] as $h ){
		// //echo $h.'<br>';
		// // print_r( $_POST[$h]);
		// for( $i=0;$i<6;$i++ ){
			// echo '-'.$hri[$i];
			// echo '<br>';
		// }
	// }
// }
foreach($semana as $dia){
	//print_r( $_POST[$dia]);
	echo $dia.'<br>';
	
	// foreach( $_POST[$dia] as $h ){
	for( $i=0;$i<6;$i++ ){
		
		echo $hri[$i].'-'.$hrt[$i].' '.$_POST[$dia][$i].'<br>';
		
		
		// echo $h.'<br>';
		// print_r( $_POST[$h]);
		// for( $i=0;$i<6;$i++ ){
			// echo '-'.$hri[$i];
			// echo '<br>';
		// }
	}
	
}
// $d="lunes";
// if(isset($_POST[$d]))
// print_r( $_POST[$d] );


{
// if(isset($_POST['lunes'])){
// print_r( $_POST['lunes']);
// echo '<br>';
// print_r( $_POST['martes']);
// foreach($_POST['horaI'] as $h){
	// echo $h.'<br>';
 // }

// echo $_POST['dos'];
// echo "-------";
// echo $_POST['tres'];

// echo $_POST['horaI']."<---->".$_POST['horaT'];

// echo '<div> <strong> Hora: </strong> <input type="time" name="hora" value='.$hri.' min="'.$hri.'"
                                 // max="21:00" step="3600">
								 // <input style="border:none;" type="text" name="firstname" value="La hora minima es '.$hri.'" readonly>';
// }







// if(isset($_POST['horaI'])){
// echo $_POST['horaI']."<---->".$_POST['horaT'];

// $hri = $_POST['horaI'];
// $hrt = $_POST['horaT'];

// echo '<div> <strong> Hora: </strong> <input type="time" name="hora" value='.$hri.' min="'.$hri.'"
                                 // max="21:00" step="3600">
								 // <input style="border:none;" type="text" name="firstname" value="La hora minima es '.$hri.'" readonly>';
								 
								 
// echo '<div> <strong> Hora: </strong> <input type="time" name="hora" value='.$hrt.' min="08:00"
                                 // max="'.$hrt.'" step="3600">
								 // <input style="border:none;" type="text" name="firstname" value="La hora maxima es '.$hrt.'" readonly>';
// }






/*
	if(isset($_POST['fpr']))
	echo $_POST['fpr'];
	if(isset($_POST['cpr']))
	echo $_POST['cpr'];
*/
	/*if (isset($_POST['btnLogA'])) {
          echo "Se ha pulsado el botón aceptar";
     } else {
          echo "Se ha pulsado el botón cancelar";
     }
	 */
	 
	// if (isset($_POST['anterior'])) {
		// echo "buscare un mes anterior";
		// $mes = $_POST['mes']-1;		
		// echo $_POST['anio']."_";
		// echo $mes."_";
		// echo $_POST['dia']."_";
	// } else if(isset($_POST['siguiente'])){
		// echo "buscare el mes siguiente";
		// $mes = $_POST['mes']+1;		
		// echo $_POST['anio']."_";
		// echo $mes."_";
		// echo $_POST['dia']."_";		
	// } else{	
	// }
	
	}
	 
	 
?>