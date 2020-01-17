<?php
include('conexion.php');
//include_once("conexion.php");
//echo "hola";

if(isset($_POST['senal']) && $_POST['senal']=='1')
//if(isset($_POST['senal']))
 {
	mysqli_set_charset($connection, "utf8"); //formato de datos utf8
	//$query = "select avg(temperatura) as temperatura from tem_hum where id_pais=\"$id_p\" and id_sala=\"$id_s\" group by mes";
	//$resultados = mysqli_query($bd, $query);
	
	//$query = "select temperatura, humedad from tem_hum where id_pais=4 and id_sala=1 order by id_tem_hum desc limit 10";  
	$query = "select temperatura, humedad from sensores order by id_sensor desc limit 10";        

	$result = mysqli_query($connection, $query);
	//echo mysqli_num_rows($result);

	if (mysqli_num_rows($result) > 0) {
	//PRIMERA PRUEBA DE CONVERSION A JSON
	if(!$result = mysqli_query($connection, $query)) die(); //si la conexión cancelar programa
	    $data = array(); //creamos un array
	    $i=0;
	    //while($row = mysqli_fetch_array($result)){
	    while(($row = mysqli_fetch_assoc($result)) == true){
	        $data[$i] = $row;
	        $i++; 
	    }
	    //print_r ($data);
	    echo json_encode($data);
 }else{echo "0";}  

}


// //TERCERRA FORMA DE PRUEBA.
// 		$result = mysqli_query($connection, $query);
// 		$data = array(); //creamos un array
// 		if (mysqli_num_rows($result) > 0) {
// 			$datos["estado"] = 1;
// 			//while($row = mysqli_fetch_array($result))
// 			//while(($row = mysqli_fetch_assoc($result)) == true)
// 			while($row = mysqli_fetch_assoc($result))
// 			{
// 				//$rw .= $row['temperatura'];
// 				//$data[]= $row['temperatura'];
// 				$data []= mysqli_fetch_row($result);
//             }
//             	$datos["alumnos"]= $data;
//         }

//         //$datos[] = array_map("utf8_encode", $data);
//         header('Content-type: application/json; charset=utf-8');
//         print json_encode($datos, JSON_UNESCAPED_UNICODE);


// //SEGUNDA PRUEBA DE CONVERSION A JSON
// $result = mysqli_query($connection, $query);
// $x = mysqli_num_rows($result);
// //echo $x;      //La variable $x debe valer 10.
// $i=0;
// if (mysqli_num_rows($result) > 0) {
// 	$re="{";
// while(($row = mysqli_fetch_assoc($result)) == true){
// 	if($i<9){
// 		$re.= $row['temperatura'].",";
// 	}else{
// 		$re.= $row['temperatura'];
// 	}
// 	$data[]=$row;     //Para nada ocupo de momento esta linea.
// 	$i++;
// }
// echo $re."}";


	//echo json_encode($data);   //NO LA OCUPO EN LA PRUEBA
// }else{
// 	echo "0";
// }

?>