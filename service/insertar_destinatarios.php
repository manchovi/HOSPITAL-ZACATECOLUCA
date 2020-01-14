<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_POST["servidor"]) && ($_POST["correo1"]) && ($_POST["correo2"]) && ($_POST["telefono"])){
 	$server = $_POST['servidor'];
 	$email1 = $_POST['correo1'];
 	$email2 = $_POST['correo2'];
 	$telefono = $_POST['telefono'];
	$resultado = Mantenimiento::registroDestinatarios(1, $server, $email1, $email2, $telefono);

	if ($resultado==1) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Registro guardado correctamente."));
        echo $json_string;
        
        //$json_string = json_encode(array('estado' => '1','mensaje' => 'Actualización aplicada correctamente.'));
        //echo json_encode($json_string, JSON_UNESCAPED_UNICODE);
		
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se ha guardado nada. Ya existe."));
		echo $json_string;
    }
}

?>