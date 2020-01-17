<?php
include('conexion.php');
//include_once("conexion.php");
mysqli_set_charset($connection, "utf8"); //formato de datos utf8

/*
$query_temp="SELECT temperatura, humedad, fecha, hora from tem_hum where id_pais=4 and id_sala=1 ORDER BY id_tem_hum DESC LIMIT 0,1";
$result = mysqli_query($connection, $query_temp);

/*$query_hum="SELECT humedad, fecha, hora from tem_hum ORDER BY id_tem_hum DESC LIMIT 0,1";
$result1 = mysqli_query($connection, $query_hum);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$json[] = array(
					'temperatura'=> $row['temperatura'],
				    'humedad' => $row['humedad'],
				    'fecha' => $row['fecha'],
				    'hora' => $row['hora']
				 );
}

print json_encode($json,JSON_UNESCAPED_UNICODE);
*/


//$query = "select temperatura, humedad from tem_hum where id_pais=4 and id_sala=1 order by id_tem_hum desc limit 10";
$query_temp="SELECT temperatura, fecha from sensores ORDER BY id_sensor DESC LIMIT 0,1";
$result = mysqli_query($connection, $query_temp);

$query_hum="SELECT humedad, hora from sensores ORDER BY id_sensor DESC LIMIT 0,1";
$result1 = mysqli_query($connection, $query_hum);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$json[] = array(
					'name'=> "Temperatura oC",
					'score' => $row['temperatura'],
				    'fh' => $row['fecha']
				 );
}

if (mysqli_num_rows($result1) > 0) {
	$row = mysqli_fetch_assoc($result1);
	$json[] = array(
					'name'=> "Humedad Relativa %",
					'score' => $row['humedad'],
				    'fh' => $row['hora']
				 );
}

print json_encode($json,JSON_UNESCAPED_UNICODE);



//ASI HE PODIDO FINALMENTE GENERAR MI PROPIO FORMATO
//PERSONALIZADO DE SALIDA JSON DESDE LA BASE DE DATO
// $prueba2["uno"] = Array(
//             //"email" => $_GET['lat'],
//             "email" => "nada@nada.com",
//             "nombre" => "nada",
//             "pregunta" => "nada"
//         );

// $prueba2["dos"] = Array(
//             //"email" => $_GET['lat'],
//             "email" => "a@nada.com",
//             "nombre" => "b",
//             "pregunta" => "c"
//         );
// print json_encode($prueba2,JSON_UNESCAPED_UNICODE);


// echo  '[
//  		 { 
//  			"name": "temperatura",
//  			"score": "44"
//  		 },
//  		 { 
//  			"name": "humedad",
//  			"score": "10"
//  		 }
//  	   ]';



// while(($row = mysqli_fetch_assoc($result)) == true){
// 	$data[]=$row;
// }

//PRIMERA PRUEBA DE CONVERSION A JSON
// if(!$result = mysqli_query($connection, $query)) die(); //si la conexión cancelar programa
//     $rawdata = array(); //creamos un array
//     //guardamos en un array multidimensional todos los datos de la consulta
//     $i=0;
//     while($row = mysqli_fetch_array($result))
//     {
//         $rawdata[$i] = $row;
//         $i++;
//     }
//     echo json_encode($rawdata);


    /*PUEDE SER ASI LA SOLUCIÓN CREANDO NUESTRO PROPIO FORMATO JSON*/
    //http://localhost/webservice_android/obtener_alumno_por_id.php?idalumno=52
    /*if ($retorno) {

            $alumno["estado"] = 1;		// cambio "1" a 1 porque no coge bien la cadena.
            $alumno["alumno"] = $retorno;
            $alumno["temp"] = "{'temperatura':'23'}";
            // Enviar objeto json del alumno
            header('Content-type: application/json; charset=utf-8');
            print json_encode($alumno);
        } else {
            // Enviar respuesta de error general
            header('Content-type: application/json; charset=utf-8');
            print json_encode(
                array(
                    'estado' => 2,
                    'mensaje' => 'No se obtuvo el registro'
                )
            );
        }
        */
    /***************************************************************/
    /*  ME PUEDE SERVIR - ESTA CON MYSQLI
		$query = " select luminosidad from tem_hum where id_pais=\"$id_p\" and id_sala=\"$id_s\" order by id_tem_hum desc limit ".$c;
        //$query = " select luminosidad from tem_hum order by id_tem_hum desc limit ".$c;
        $resultados = mysqli_query($bd, $query);
        while($rows = mysqli_fetch_array($resultados)){
            ?>
                <?php echo $rows["luminosidad"]?>,
            <?php
        }
    */

//Lo tengo que mostrar en este formato desde la consulta a la BD.
//PARA QUE ME GRAFIQUE.
// echo  '[
//  		 { 
//  			"name": "temperatura",
//  			"score": "44"
//  		 },
//  		 { 
//  			"name": "humedad",
//  			"score": "10"
//  		 }
//  	   ]';

//////////////////////////////////////////
/*[
	{ "0":"44.78",
	  "temperatura":"44.78",
	  "1":"22.1",
	  "humedad":"22.1"
    }
]*/
//////////////////////////////////////////

//Asi me devuelve la base de datos.
// echo '[
//  		{
//  			"temperatura":"90.5",
//  		    "humedad":"35.4"
//  	    }
//  	  ]';


// echo '[ {
//  			"name": "Lionel Messi",
//  			"score": "60"
//  		},
//  		{
//  			"name": "Ronaldo",
//  			"score": "50"
//  		},
//  		{
//  			"name": "Neymar",
//  			"score": "17"
//  		},
//  		{
//  			"name": "Luis Saurez",
//  			"score": "24"
//  		},
//  		{
//  			"name": "Manuel Gámez",
//  			"score": "90"
//  		}
//       ]';

?>