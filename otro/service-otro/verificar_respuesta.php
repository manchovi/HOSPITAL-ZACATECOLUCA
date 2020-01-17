<?php
include('main_class1.php');
//require 'main_class1.php';

if (isset($_POST["id"]) && ($_POST["respuesta"])){
	$id = $_POST['id'];
 	$respuesta = $_POST['respuesta'];

	$resultado = Mantenimiento::getByAnswer($id, $respuesta);
	
	if($respuesta==$resultado['respuesta']){
	//if ($resultado) {

		//PRUEBA FUNCIONAL.
		//echo "1";   //solo esta línea para funcionamiento actual.
		
		$datos = array();
		$datos[] = array_map("utf8_encode", $resultado);
  		header('Content-type: application/json; charset=utf-8');
  		echo json_encode($datos, JSON_UNESCAPED_UNICODE);
		
		//$json_array = json_encode($datos);
		//echo $json_array;

    	

	}else{ 
        //envio un 0 para decirle a android que no existe el email.
        echo "0";                 //solo esta línea para funcionamiento actual. 
    } 
}
?>