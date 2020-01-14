<?php
//Funcion que contiene el enlace a la base de datos.
function conexion(){
	$conn = null;
	$host = 'localhost';
	$db = 'mjgl_tesis';
	$user = 'root';
	//$pwd = 'tesis_utla_2019_';
	$pwd = '';
	//'mjgl_chovigam','iot_2018_','mjgl_iot'
	
try{
	//$conn = new PDO('mysql:host=localhost;dbname=mjgl_tesis', $user, $pwd);
	$conn = new PDO('mysql:host='.$host.'; dbname='.$db,$user,$pwd);

	$mitz="America/El_Salvador";
    $tz = (new DateTime('now', new DateTimeZone($mitz)))->format('P');
    $conn->exec("SET time_zone='$tz';");
	//echo 'Conexion satisfactoria.<br>';
	
}catch(PDOException $e){
	echo '<p> no se puede conectar con la base de datos!!</p>';
	exit();
}
return $conn;
	
}
//conexion();

?>