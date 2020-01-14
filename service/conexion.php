<?php
$config = parse_ini_file('config1.ini');
//require('conexion.php');
// Carga la configuracion 
// Conexion con los datos del 'config.ini' 
$connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
//mysqli_query("SET NAMES 'utf8'");
// Si la conexion falla, aparece el error 
if($connection === false) { 
 echo 'Ha habido un error <br>'.mysqli_connect_error(); 
} else {
 //echo 'Conectado a la base de datos';
}

?>