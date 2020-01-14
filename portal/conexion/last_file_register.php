<?php
date_default_timezone_set('America/El_Salvador'); 
$fecha = date('Y-m-d');

include ('conectarpdo.php'); 
$conn=conexion();

//SELECT * FROM Tabla ORDER by ID ASC LIMIT 1
//$statement=$conn->prepare("SELECT luz2 FROM sensores ORDER BY id_sensor DESC LIMIT 1");
//$statement=$conn->prepare("SELECT temperatura, humedad, luz1,luz2,luz3,luz4,luz5,luz6,luz7,luz8,fecha,hora FROM sensores ORDER BY id_sensor DESC LIMIT 5");
//$statement=$conn->prepare("SELECT id_sensor, temperatura, humedad, luz1,luz2,luz3,luz4,luz5,luz6,fecha,hora FROM sensores ORDER BY id_sensor DESC LIMIT 5");
$statement=$conn->prepare("SELECT id, frec_cardiaca, spo2, ta_diastolic, ta_systolic, ta_pulse_min, frec_respiratoria, temp_corporal, alarma, fecha, hora FROM tb_sensores ORDER BY id DESC LIMIT 5");
$statement->execute();

while ($results = $statement->fetch(PDO::FETCH_ASSOC)) {
    $data[]=$results;
    /* echo "<tr><td>".$result['id']."</td><td>".$result['nombre'].
        "</td><td>".$result['apellido']."</td><td>".$result['email'].
        "</td></tr>"; */
}
$json=json_encode($data);
echo $json;


/*Esto comentarie...
$results=$statement->fetch(PDO::FETCH_OBJ);
$data[]=$results;
$json=json_encode($data);
echo $json;
fin de esto comentarie....*/

?>