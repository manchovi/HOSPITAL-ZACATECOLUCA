<?php
$dbhost	= "localhost";	         // localhost or IP
$dbuser	= "root";	             // database username
$dbpass	= "";	                 // database password
$dbname	= "mjgl_hospital";       // database name
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*
$conn=mysqli_connect("localhost", "root", "", "db_range");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
*/

?>