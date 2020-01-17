<?php
include('conexion.php');
//include_once("conexion.php");

if(isset($_POST['senal']) && $_POST['senal']=='1')
//if(isset($_POST['senal']))
 {
mysqli_set_charset($connection, "utf8"); //formato de datos utf8

//$query_temp="SELECT temperatura, humedad, fecha, hora from tem_hum where id_pais=4 and id_sala=1 ORDER BY id_tem_hum DESC LIMIT 0,1";



//$query_temp="SELECT temperatura, humedad, fecha, hora from sensores";
//$result = mysqli_query($connection, $query_temp);

$query_temp="SELECT temperatura, humedad, luz1, luz2, luz3, luz4, luz5, luz6, luz7, luz8, fecha, hora from sensores ORDER BY id_sensor DESC LIMIT 0,1";
$result = mysqli_query($connection, $query_temp);

/*$query_hum="SELECT humedad, fecha, hora from tem_hum ORDER BY id_tem_hum DESC LIMIT 0,1";
$result1 = mysqli_query($connection, $query_hum);*/

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$json[] = array(
					'temperatura'=> $row['temperatura'],
				    'humedad' => $row['humedad'],
 'luz1' => $row['luz1'],	
 'luz2' => $row['luz2'],	
 'luz3' => $row['luz3'],	
 'luz4' => $row['luz4'],	
 'luz5' => $row['luz5'],	 
 'luz6' => $row['luz6'],	
 'luz7' => $row['luz7'],	 
 'luz8' => $row['luz8'],	 
    'fecha' => $row['fecha'],
				    'hora' => $row['hora']
				 );
}

/*if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$json[] = array(
					'name'=> "Temperatura",
				    'score' => $row['temperatura'],
				    'fecha' => $row['fecha'],
				    'hora' => $row['hora']
				 );
}

if (mysqli_num_rows($result1) > 0) {
	$row = mysqli_fetch_assoc($result1);
	$json[] = array(
					'name'=> "Humedad",
				    'score' => $row['humedad'],
				    'fecha' => $row['fecha'],
				    'hora' => $row['hora']
				 );
}*/

print json_encode($json,JSON_UNESCAPED_UNICODE);
}
?>