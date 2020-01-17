<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_POST["servidor"]) && ($_POST["correo1"]) && ($_POST["correo2"]) && ($_POST["telefono"])){
 	$server = $_POST['servidor'];
 	$email1 = $_POST['correo1'];
 	$email2 = $_POST['correo2'];
 	$telefono = $_POST['telefono'];
    //$user = $_POST['usuario'];

	$resultado = Mantenimiento::update_destinatarios(1, $server, $email1, $email2, $telefono);
	
	if ($resultado==1) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Actualizacion aplicada correctamente."));
        echo $json_string;
        
        //$json_string = json_encode(array('estado' => '1','mensaje' => 'Actualizaci¨®n aplicada correctamente.'));
        //echo json_encode($json_string, JSON_UNESCAPED_UNICODE);
		
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se ha modificado ningun dato."));
		echo $json_string;
    }
}

?>