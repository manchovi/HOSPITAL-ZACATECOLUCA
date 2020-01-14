<?php
/* header('Content-Type: application/json');
 $conn=new PDO("mysql:dbname=internet_thing_bd;host=localhost","root","");*/
date_default_timezone_set('America/El_Salvador'); 
$fecha = date('Y-m-d');

include ('conectarpdo.php'); 
$conn=conexion();

//SELECT * FROM Tabla ORDER by ID ASC LIMIT 1
$statement=$conn->prepare("SELECT luz1 FROM sensores ORDER BY id_sensor DESC LIMIT 1");
$statement->execute();
$results=$statement->fetch(PDO::FETCH_ASSOC);

$foco1 =  $results["luz1"];
//echo ($temperatura." &ordm;C");

//echo ($foco1);

if($foco1>0){
    echo "ON";
    //echo "<i class='material-icons'>wb_incandescent</i>";
}else{
    echo "OFF";
    //echo "<i class='material-icons'>lightbulb_outline</i>";
   
}


?>