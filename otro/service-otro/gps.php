<?php
    //mjgl.com.sv/service/gps.php?lat=13.69809719038221&lon=-89.11752058561554
	date_default_timezone_set('America/El_Salvador'); 
    $fecha = date('Y-m-d H:i:s');

    if(isset($_GET['lat']) && isset($_GET['lon'])) {
        $data = Array(
            "latitud" => $_GET['lat'],
            "longitud" => $_GET['lon'],
            "Fecha" => $fecha
        );
        file_put_contents("gps.json", json_encode($data));
    }
    echo file_get_contents("gps.json");

  ?>