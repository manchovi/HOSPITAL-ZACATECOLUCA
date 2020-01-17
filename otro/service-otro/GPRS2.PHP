<?php
    //if(isset($_GET["temp"])){
    if(isset($_GET["temp"]) && $_GET["hume"]){
        $temperatura=$_GET["temp"];
        $humedad=$_GET["hume"];
        
        
        echo "La temperatura es: ".$temperatura;
        echo "La humedad relativa es: ".$humedad;
        
        echo "Saludos cordiales mis estimados colegas de la comunidad no dormimos. Jojojo jo...";
        
    }
?>
