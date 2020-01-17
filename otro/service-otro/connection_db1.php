<?php
function conexion(){
	$conn = null;
	$host = 'localhost';
	/* $db = 'mjgl_tesis';
	$user = 'mjgl_tesis';
	$pwd = 'tesis2018_'; */
	$db = 'mjgl_tesis';
	$user = 'root';
	$pwd = '';
	
try{
	//$link = new PDO("mysql:host=localhost;dbname=DB;charset=UTF8");
	//$conn = new PDO('mysql:host='.$host.'; dbname='.$db,$user,$pwd);          //esta conexion es la que he estado ocupando desde el inicio
	$conn = new PDO('mysql:host='.$host.'; dbname='.$db,$user,$pwd);
	//$conn = new PDO('mysql:host='.$host.'; dbname='.$db,$user,$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));  //Me pase a esta conexión por problemas de acentos, letra ñ y otros.
	$mitz="America/El_Salvador";
    $tz = (new DateTime('now', new DateTimeZone($mitz)))->format('P');
    $conn->exec("SET time_zone='$tz';");
    
	
}catch(PDOException $e){
	echo "<center><h2 style='color:green'>Error al tratar de conectar a la BD.";
	echo " consulte al soporte Técnico</h2></center>";
	exit();
}
	return $conn;
}

	?>