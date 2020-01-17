<?php
    //mjgl.com.sv/service/gps.php?lat=13.69809719038221&lon=-89.11752058561554
    
    include ('../conexion/conectarpdo.php');
    
	date_default_timezone_set('America/El_Salvador'); 
    $fecha = date('Y-m-d H:i:s');

    if(isset($_GET['lat']) && isset($_GET['lon'])) {
        $data = Array(
            "latitud" => $_GET['lat'],
            "longitud" => $_GET['lon'],
            "Fecha" => $fecha
        );


        try {
            
        $link=conexion();
        
        $sql = $link->prepare("INSERT INTO gps (latitud, longitud, fecha)
                                VALUES (?, ?, ?)");
        $link->beginTransaction();
        //$sql->execute(array($nombre, $apellido, $correo, $fecha));
        $sql->execute(array($_GET['lat'], $_GET['lon'], $fecha));
        $count = $sql->rowCount(); 
        
        echo "<center><table border=0 width='80%'><tr><td bgcolor=''>
          <marquee behavior='alternate'><b>REGISTROS INSERTADOS CORRECTAMENTE</b></marquee>
          </table></center>";

        echo "<center><font size=2>La cantida de registro guardado es: ".$count."</font></br>";
        $link->commit();

        }catch (Exception $e) {
        echo "Failed: " . $e->getMessage();
        }
        
        //file_put_contents("gps.json", json_encode($data));
    }
    //echo file_get_contents("gps.json");

  ?>