<?php

	@$usu = $_REQUEST["usu"];
	@$pass= $_REQUEST["pas"];

	try {
		$conexion = new PDO("mysql:host=localhost;dbname=mjgl_iot","mjgl_chovigam","da_ny_2018_");
		$resultado = $conexion->query("select * from usuarios where email='$usu' and clave=MD5('$pass')");
	}
		catch (PDOException $ex) {
		//echo "ERROR: " . $e->getMessage();
		echo "Sucedio un problema al realizar la conexion !!";
		exit;
	}	

	//FORMA # 1.
	// //Se  verifica si  hay resultados y se  crea un array asociativo usando  ->fetch_assoc()
	// $datos = $resultado->fetch(PDO::FETCH_ASSOC);

	// 	//Se verifica que la consulta  devolvió valores
	// 	if ($resultado->rowCount() > 0)
	// 	{
	// 	    //print_r($datos);
	// 	    //print_r(json_encode($datos));
	// 	    echo json_encode($datos);
	// 	}else{
	// 	 	print_r("No se encontraron datos, verifique su conexión o la consulta enviada");   
	// 	}


	//FORMA # 2.
	$count = $resultado->rowCount();
	if ($count>0){
	//echo "Cantidad: ".$count."<br>";
	$datos=array();
	
	/*foreach ($resultado as $row){
		$datos[]=$row;
	}*/

	$datos[] = array_map("utf8_encode", $resultado->fetch(PDO::FETCH_ASSOC));

	header('Content-type: application/json; charset=utf-8');
	//echo json_encode($datos);
	print json_encode($datos);
    }else{
    	echo "0";
    }
	



    //FORMA # 3.
	// //Preparamos la consulta sql
	// $respuesta = $conexion->prepare("select * from usuarios where usuario='$usu' and clave='$pass'");

	// //Ejecutamos la consulta
	// $respuesta->execute();

	// //Creamos un array para obtener toda la data
	// $usuarios = [];

	// //Recorremos la data obtenida
	// foreach($respuesta as $res){
	// 	//Llenamos la data en el array
	//     $usuarios[]=$res;
	// }

	//Hacemos una impresion del array en formato JSON.
	//echo json_encode($usuarios);


?>