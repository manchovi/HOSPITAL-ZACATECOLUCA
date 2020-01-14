<?php
$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";	       // database username
$dbpass	= "";	           // database password
$dbname	= "mjgl_tesis";       // database name
	
//Criar a conexão
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>