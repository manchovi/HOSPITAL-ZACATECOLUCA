
<?php
   if(isset($_GET["temperatura"]) && ($_GET["humedad"])){ 
    $dbusername = "root";  
    $dbpassword = "";  
    $server = "localhost"; 
  
    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword);
    $dbselect = mysqli_select_db($dbconnect, "mjgl_tesis");

    date_default_timezone_set('America/El_Salvador');
    $hora = date("H:i:s");
    $fecha=date('Y-m-d');
    $mes= date('m');
      
    //$descripcion= $_GET['descripcion'];
	$temperatura= $_GET['temperatura'];
    $humedad= $_GET['humedad'];
    $luz1= $_GET['luz1'];
    $luz2= $_GET['luz2'];
    $luz3= $_GET['luz3'];
    $luz4= $_GET['luz4'];
    $luz5= $_GET['luz5'];
    $luz6= $_GET['luz6'];
    $sql = "INSERT INTO sensores (temperatura,humedad,luz1,luz2,luz3,luz4,luz5,luz6,fecha,hora,mes) VALUES ('$temperatura','$humedad','$luz1','$luz2','$luz3','$luz4','$luz5','$luz6','$fecha','$hora','$mes')";
 
    mysqli_query($dbconnect, $sql);

    }

?>