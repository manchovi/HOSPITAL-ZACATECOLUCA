<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_POST["id"]) && ($_POST["id"]==1)){
 	$id = $_POST['id'];

	$resultado = Mantenimiento::getconfiguracionDestinatarios();
	
	if ($resultado) {
		$datos = array();
		$datos[] = array_map("utf8_encode", $resultado);
  		header('Content-type: application/json; charset=utf-8');
	
		//$json_array = json_encode($datos);
		//echo $json_array;

    echo json_encode($datos, JSON_UNESCAPED_UNICODE);

	}else{ 
        //envio un 0 para decirle a android que no existe el usuario MASTER introducido en la activity de LOGIN.
        echo "0";                 //solo esta línea para funcionamiento actual. 
    } 
}

?>