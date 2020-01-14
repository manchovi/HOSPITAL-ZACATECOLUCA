<?php
/* header('Content-Type: application/json');
 $conn=new PDO("mysql:dbname=internet_thing_bd;host=localhost","root","");*/
date_default_timezone_set('America/El_Salvador'); 
$fecha = date('Y-m-d');

include ('conectarpdo.php'); 
$conn=conexion();

//SELECT * FROM Tabla ORDER by ID ASC LIMIT 1
//$statement=$conn->prepare("SELECT luz2 FROM sensores ORDER BY id_sensor DESC LIMIT 1");
$statement=$conn->prepare("SELECT frec_cardiaca, spo2, ta_diastolic, ta_systolic, ta_pulse_min, frec_respiratoria, temp_corporal, alarma, fecha, hora FROM tb_sensores ORDER BY id DESC LIMIT 1");
$statement->execute();

//$results=$statement->fetch(PDO::FETCH_OBJ);
//print_r($results);

//$results=$statement->fetch(PDO::FETCH_ASSOC);
$results=$statement->fetch(PDO::FETCH_OBJ);
$data[]=$results;
$json=json_encode($data);
echo $json;



//$results=$statement->fetch(PDO::FETCH_ASSOC);
//$json=json_encode($results);
//echo $json;



//$foco2 =  $results["luz2"];
//echo ($temperatura." &ordm;C");





?>