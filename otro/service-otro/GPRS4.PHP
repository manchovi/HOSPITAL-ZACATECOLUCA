<?php
include('main_class1.php');
//require 'main_class1.php';

// && ($_GET["luz2"]) && ($_GET["luz3"]) && ($_GET["luz4"]) && ($_GET["luz5"]) && ($_GET["luz6"]) && ($_GET["luz7"]) && ($_GET["luz8"])


//http://mjgl.com.sv/UTLA/service/GPRS4.PHP?temp=32.90&hume=52.90&luz1=1&luz2=1&luz3=1&luz4=1&luz5=1&luz6=1&luz7=1&luz8=1

//                  /UTLA/service/GPRS4.PHP?temp=32.90&hume=52.90&luz1=1&luz2=1&luz3=1&luz4=0&luz5=0&luz6=0&luz7=0&luz8=200

//if (isset($_GET["temp"]) && ($_GET["hume"]) && ($_GET["luz1"]) && ($_GET["luz2"]) && ($_GET["luz3"]) && ($_GET["luz4"]) && ($_GET["luz5"]) && ($_GET["luz6"]) && ($_GET["luz7"]) && ($_GET["luz8"])){
if (isset($_GET["temp"]) && ($_GET["hume"])){
 	$temperatura = $_GET['temp'];
 	$humedad = $_GET['hume'];
 	$luz1 = $_GET['luz1'];
 	$luz2 = $_GET['luz2'];
 	$luz3 = $_GET['luz3'];
 	$luz4 = $_GET['luz4'];
 	$luz5 = $_GET['luz5'];
 	$luz6 = $_GET['luz6'];
 	$luz7 = $_GET['luz7'];
 	$luz8 = $_GET['luz8'];
 	
 	echo "<BR>Congratulations...";
 	
 	//$descripcion = "Info sensores...";
 	
 	// [          0     ,      1      ,       2      ,      3      ,        4      ]
    $valor_descripcion=array("CONECTADOS...",                           //0
                             "TEMPERATURA ~ NIVEL NORMAL",              //1
                             "TEMPERATURA ~ NIVEL MEDIO",               //2
                             "TEMPERATURA ~ NIVEL DE ATENCIÓN",         //3
                             "TEMPERATURA ~ NIVEL ALARMA");             //4
                             
    if($temperatura>0 && $temperatura<=32){
        $desc=1;
    }      
    
    if($temperatura>32 && $temperatura<=38){
        $desc=2;
    }
    
    if($temperatura>38 && $temperatura<=50){
        $desc=3;
    }  
    
    if($temperatura>50){
        $desc=4;
    }  
    
                             
    $descripcion=$valor_descripcion[$desc];                         

	$resultado = Mantenimiento::registroSensores1($descripcion, $temperatura, $humedad, $luz1, $luz2, $luz3, $luz4, $luz5, $luz6, $luz7, $luz8);

	if ($resultado==1) {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Registro guardado correctamente."));
        echo $json_string;
        
        //$json_string = json_encode(array('estado' => '1','mensaje' => 'Actualizacion aplicada correctamente.'));
        //echo json_encode($json_string, JSON_UNESCAPED_UNICODE);
		
    } else {
        header('Content-type: application/json; charset=utf-8');
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se ha guardado nada."));
		echo $json_string;
    }
}

?>