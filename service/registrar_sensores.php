<?php

    include('main_class1.php');
    //require 'main_class1.php';

    @$descripcion = $_POST['descripcion'];
    @$spo2 = htmlspecialchars($_POST["spo2"],ENT_QUOTES);
    @$frec_cardiaca = htmlspecialchars($_POST["frec_cardiaca"],ENT_QUOTES);
    //@$tension_arterial = htmlspecialchars($_POST["tension_arterial"],ENT_QUOTES);
    @$diastolic = htmlspecialchars($_POST["diastolic"],ENT_QUOTES);
    @$systolic = htmlspecialchars($_POST["systolic"],ENT_QUOTES);
    @$pulsemin = htmlspecialchars($_POST["pulsemin"],ENT_QUOTES);
    @$frec_respiratoria = htmlspecialchars($_POST["frec_respiratoria"],ENT_QUOTES);
    @$temp_corporal = htmlspecialchars($_POST["temp_corporal"],ENT_QUOTES);
    @$alarma = htmlspecialchars($_POST["alarma"],ENT_QUOTES);
    @$fecha = htmlspecialchars($_POST["fecha"],ENT_QUOTES);
    @$hora = htmlspecialchars($_POST["hora"],ENT_QUOTES);
    @$responsable_especialista = htmlspecialchars($_POST["responsable_especialista"],ENT_QUOTES);

if (($descripcion!="") and 
    ($frec_cardiaca!="") and 
    ($spo2!="") and 
    ($tension_arterial!="") and 
    ($frec_respiratoria!="") and 
    ($temp_corporal!="") and 
    ($alarma!="") and 
    ($fecha!="") and 
    ($hora!="") and 
    ($responsable_especialista!="")) {

/*
if (isset($_POST["descripcion"]) && 
         ($_POST["frec_cardiaca"]) && 
         ($_POST["spo2"]) && 
         ($_POST["tension_arterial"]) && 
         ($_POST["frec_respiratoria"]) && 
         ($_POST["temp_corporal"]) && 
         ($_POST["alarma"]) &&
         ($_POST["fecha"]) && 
         ($_POST["hora"]) && 
         ($_POST["responsable_especialista"])){
             
     	$descripcion = $_POST['descripcion'];
     	$frec_cardiaca = $_POST['frec_cardiaca'];
     	$spo2 = $_POST["spo2"];
     	$tension_arterial = $_POST['tension_arterial'];
     	$frec_respiratoria = $_POST['frec_respiratoria'];
     	$temp_corporal = $_POST['temp_corporal'];
     	$alarma = $_POST['alarma'];
     	$fecha = $_POST['fecha'];
     	$hora = $_POST['hora'];
     	$responsable_especialista = $_POST["responsable_especialista"];*/
     	
	    $resultado = Mantenimiento::save($descripcion, $frec_cardiaca, $spo2, $diastolic, $systolic, $pulsemin, $frec_respiratoria, $temp_corporal, $alarma, $fecha, $hora, $responsable_especialista);

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