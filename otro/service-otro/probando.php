<?php
include('conexion.php');
//include_once("conexion.php");
mysqli_set_charset($connection, "utf8"); //formato de datos utf8

//$query = "select avg(temperatura) as temperatura from tem_hum where id_pais=\"$id_p\" and id_sala=\"$id_s\" group by mes";
//$resultados = mysqli_query($bd, $query);
$query = "select temperatura, humedad from tem_hum where id_pais=4 and id_sala=1 order by id_tem_hum desc limit 10";        


//PRIMERA PRUEBA DE CONVERSION A JSON
// if(!$result = mysqli_query($connection, $query)) die(); //si la conexión cancelar programa
//     $data = array(); //creamos un array
//     $i=0;
//     //while($row = mysqli_fetch_array($result)){
//     while(($row = mysqli_fetch_assoc($result)) == true){
//         $data[$i] = $row;
//         $i++;
//     }
//     //print_r ($data);
//     echo json_encode($data);


    //fetch tha data from the database
	//while ($row = mysql_fetch_array($result)) {
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result)){
			echo "Temperatura:".$row{'temperatura'}." Humedad:".$row{'humedad'}."<br>";
		}

		//echo '{"users": ' . json_encode($users) . '}';
		//echo '{"error":{"text":'. $e->getMessage() .'}}';
		//echo '{"error":{"text":'. $e->getMessage() .'}}';
		

?>