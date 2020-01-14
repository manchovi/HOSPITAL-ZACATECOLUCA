<?php
/* header('Content-Type: application/json');
 $conn=new PDO("mysql:dbname=internet_thing_bd;host=localhost","root","");*/
date_default_timezone_set('America/El_Salvador'); 
$fecha = date('Y-m-d');

include ('conectarpdo.php'); 
$conn=conexion();

//SELECT * FROM Tabla ORDER by ID ASC LIMIT 1
$statement=$conn->prepare("SELECT fecha,hora FROM sensores ORDER BY id_sensor DESC LIMIT 1");
$statement->execute();
$results=$statement->fetch(PDO::FETCH_ASSOC);

$fecha =  $results["fecha"];
$hora =  $results["hora"];
//echo ($temperatura." &ordm;C");
echo ($fecha." ~ " .$hora);

?>