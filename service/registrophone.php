<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_POST["descripcion"]) && ($_POST["celular1"]) && ($_POST["celular2"]) && ($_POST["fecha"]) && ($_POST["hora"])){
 	$descripcion = $_POST['descripcion'];
 	$celular1 = $_POST['celular1'];
 	$celular2 = $_POST['celular2'];
 	$fecha = $_POST['fecha'];
 	$hora = $_POST['hora'];
	$resultado = Mantenimiento::registroPhones($descripcion, $celular1, $celular2, $fecha, $hora);

	if ($resultado==1) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Registro guardado correctamente."));
        echo $json_string;
        
        //$json_string = json_encode(array('estado' => '1','mensaje' => 'Actualización aplicada correctamente.'));
        //echo json_encode($json_string, JSON_UNESCAPED_UNICODE);
		
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se ha guardado nada."));
		echo $json_string;
    }
}

?>