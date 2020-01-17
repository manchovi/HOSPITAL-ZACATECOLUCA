<?php
include('main_class.php');
//inserta usuarios.
//require 'main_class.php';

if (isset($_POST["nombre"]) && ($_POST["apellido"]) && ($_POST["email"]) && ($_POST["clave"]) && ($_POST["pregunta"]) && ($_POST["respuesta"]) && ($_POST["tipo"]) ) {
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $email = $_POST['email'];
     $clave = $_POST['clave'];
     $pregunta = $_POST['pregunta'];
     $respuesta = $_POST['respuesta'];
     $tipo = $_POST['tipo'];

	$resultado = Mantenimiento::getByemail($email);
	//echo $retorno;
	if ($resultado) {
		//echo "Ya existe un usuario con este e-mail: ";
		//echo $email;
		echo "1";

	}else{ 
    // Insertar Usuario
    $retorno = Mantenimiento::insert_usuario(
    	$nombre,
        $apellido,
        $email,
        $clave,
        $pregunta,
        $respuesta,
        $tipo
        );
 	
    if ($retorno) {
        //$json_string = json_encode(array("estado" => 1,"mensaje" => "Creacion correcta"));
		//echo $json_string;

		//echo "Cuenta creada correctamente.\nLe redireccionaremos ahora al formulario de LOGIN.";
		//echo "\n\nemail: ". $email;

		echo "0";
    } else {
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se creo el registro"));
		echo $json_string;
    }
}


}

?>
