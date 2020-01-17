<?php
/*** Actualiza un alumno especificado por su identificador ***/
/*YA PASE POR AQUI*/
require 'main_class1.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["id"]) && ($_POST["clave"])){
    $id = $_POST['id'];
    $clave = $_POST['clave'];

    // Actualizar alumno
    $retorno = Mantenimiento::update_key($id, $clave);

    if ($retorno) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "O.K."));
		echo $json_string;
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "Nothing."));
		echo $json_string;
    }
}

}
?>
