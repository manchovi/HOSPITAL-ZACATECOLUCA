<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_POST["id"])){
 	$id = $_POST['id'];
	$resultado = Mantenimiento::eliminar_destinatarios($id);
	
	if ($resultado==1) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Eliminado correctamente."));
        echo $json_string;
        
        //$json_string = json_encode(array('estado' => '1','mensaje' => 'Actualizaci車n aplicada correctamente.'));
        //echo json_encode($json_string, JSON_UNESCAPED_UNICODE);
		
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No hay información que eliminar."));
		echo $json_string;
    }
}

?>