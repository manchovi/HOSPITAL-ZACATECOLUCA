<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_GET["temp"]) && ($_GET["hume"])){
 	$temperatura = $_GET['temp'];
 	$humedad = $_GET['hume'];
 	
 	$descripcion = "Info sensores...";

	$resultado = Mantenimiento::registroSensores($descripcion, $temperatura, $humedad);

	if ($resultado==1) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Registro guardado correctamente."));
        echo $json_string;
        
        //$json_string = json_encode(array('estado' => '1','mensaje' => 'Actualizaci贸n aplicada correctamente.'));
        //echo json_encode($json_string, JSON_UNESCAPED_UNICODE);
		
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se ha guardado nada."));
		echo $json_string;
    }
}

?>