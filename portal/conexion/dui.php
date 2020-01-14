<?php
//http://localhost/cocesna/include/dui.php?descripcion=4&temperatura=150&humedad=150&ip=192.168.1.102&pais=4&A0=25&manto=1&sala=4
/*http://localhost/cocesna/include/dui.php?descripcion=4&temperatura=150&humedad=150&ip=192.168.1.102&pais=4&A0=125&manto=0&sala=1*/

//***************************FUNCIONO JOJOJOJOJOJOJO****************************//
/*
  http://mjgl.com.sv/include/dui.php?descripcion=4&temperatura=10.10&humedad=11.10&ip=192.168.1.100&pais=4&A0=125&manto=1&sala=1
  http://mjgl.com.sv/include/dui.php?descripcion=4&temperatura=10.10&humedad=11.10&ip=192.168.1.100&pais=4&A0=125&manto=0&sala=1
*/

include ('../conexion/conexion.php');  
$campoCondicion = 'id';
/*$tabla = 'umbral_control_load';
$umbral_temp = 'umbral_tem';
$umbral_hume = 'umbral_hum';
$umbral_lumi = 'umbral_lum';*/

$tabla = 'alertas';
$umbral_temp = 'tem_max';
$umbral_hume = 'hum_max';
$umbral_lumi = 'test_A0_max';
$bd = new Conexion();

//En la siguiente variable obtengo el ultimo registro de configuracion aplicado.
$valorCondicion = $bd->muestra('id', 'alertas'); 

if($valorCondicion>0 && !empty($valorCondicion)){
    $umbralTemperatura = $bd->verValor($umbral_temp, $tabla, $campoCondicion, $valorCondicion);
    $umbralHumedad = $bd->verValor($umbral_hume, $tabla, $campoCondicion, $valorCondicion);
    $umbralLuminosidad = $bd->verValor($umbral_lumi, $tabla, $campoCondicion, $valorCondicion);

}else{
    $umbralTemperatura = 33;
    $umbralHumedad = 40;
    $umbralLuminosidad = 500;
    }

/*echo $umbralTemperatura."<br>";
echo $umbralHumedad ."<br>";
echo $umbralLuminosidad."<br>";*/


/*//En la siguiente variable obtengo el ultimo registro de configuracion aplicado.
$valorCondicion = $bd->muestra('id', 'umbral_control_load'); 

if($valorCondicion>0 && !empty($valorCondicion)){
    $umbralTemperatura = $bd->verValor($umbral_temp, $tabla, $campoCondicion, $valorCondicion);
    $umbralHumedad = $bd->verValor($umbral_hume, $tabla, $campoCondicion, $valorCondicion);
    $umbralLuminosidad = $bd->verValor($umbral_lumi, $tabla, $campoCondicion, $valorCondicion);
}else{
    $umbralTemperatura = 33;
    $umbralHumedad = 40;
    $umbralLuminosidad = 500;
    }*/

    //BUSCO EN LA BD EL ULTIMO REGISTRO GUARDADO DE TIEMPO H:M:S.
    $segundos = "segundo";
    $tabla = 'sensado_time';
    $valorCondi = $bd->muestra('id', 'sensado_time'); 
if($valorCondi>0 && !empty($valorCondi)){
    $umbralSegundo= $bd->verValor($segundos, $tabla, $campoCondicion, $valorCondi);
    //$valor = ($umbralTiempo * 1000);
    $segundo = $umbralSegundo;
}else{
    $segundo = 60;
    }

    //aca obtengo el ultimo valor guardado en el campo minuto.
    $minutos = "minuto";
    $tabla = 'sensado_time';
    $valorCondi = $bd->muestra('id', 'sensado_time'); 
if($valorCondi>0 && !empty($valorCondi)){
    $umbralMinuto= $bd->verValor($minutos, $tabla, $campoCondicion, $valorCondi);
    //$valor = ($umbralTiempo * 1000);
    $minuto = $umbralMinuto;
}else{
    $minuto = 0;
    }

    //aca obtengo el ultimo valor guardado en el campo hora.
    $horas = "hora";
    $tabla = 'sensado_time';
    $valorCondi = $bd->muestra('id', 'sensado_time'); 
if($valorCondi>0 && !empty($valorCondi)){
    $umbralHora= $bd->verValor($horas, $tabla, $campoCondicion, $valorCondi);
    //$valor = ($umbralTiempo * 1000);
    $hora = $umbralHora;
}else{
    $hora = 0;
    }

    // echo "Umbral temperatura: " .$umbralTemperatura."<br>";
    // echo "Umbral Humedad: ".$umbralHumedad."<br>";
    // echo "Umbral A0: ".$umbralLuminosidad."<br>";
    // echo "Tiempo en segundos: ".$segundo."<br>";
    // echo "Tiempo en minutos: ".$minuto."<br>";
    // echo "Tiempo en horas: ".$hora."<br>";
    // echo "<br>";

//@$id = htmlspecialchars($_GET["id"],ENT_QUOTES);
@$desc = $_GET['descripcion'];
@$temperatura = htmlspecialchars($_GET["temperatura"],ENT_QUOTES);
@$humedad = htmlspecialchars($_GET["humedad"],ENT_QUOTES);

@$manto = htmlspecialchars($_GET["manto"],ENT_QUOTES);

@$sensor_A0 = htmlspecialchars($_GET["A0"],ENT_QUOTES);
@$ip = htmlspecialchars($_GET["ip"],ENT_QUOTES);

@$pais = htmlspecialchars($_GET["pais"],ENT_QUOTES);
@$sala = htmlspecialchars($_GET["sala"],ENT_QUOTES);

@$pir = htmlspecialchars($_GET["pir"],ENT_QUOTES);

if (($pais!="") and ($sala!="") and ($temperatura!="") and ($humedad!="") and ($ip!="") and ($desc!="") and ($sensor_A0!="") and ($manto!="")) {
    //require("config.php");
    $con = new Conexion();
                        // [          0     ,      1      ,       2      ,      3      ,        4      ]
    $valor_descripcion=array("Conectados...",     //0
                             "Nivel Bajo",        //1
                             "Nivel Medio",       //2
                             "Nivel Alto",        //3
                             "Estado Grave",      //4
                             "Mantenimiento Sala de Equipos Comunicación - El Salvador",   //5
                             "Mantenimiento Sala de Equipos Comunicación - Honduras",      //6
                             "Mantenimiento Sala de Equipos Comunicación - Belice",        //7
                             "Mantenimiento Sala de Equipos Comunicación - Guatemala",     //8
                             "Mantenimiento Sala de Equipos Comunicación - Nicaragua",     //9
                             "Mantenimiento Sala de Equipos Comunicación - Costa Rica");   //10

      $descripcion=$valor_descripcion[$desc];
    //$nombres=array("Conectados...nombre","Sistema Estable","Sist. Condiciones Medias","Sist. Condiciones Altas","Sist. Condiciones grave");
     
    // $sedes = array("Honduras",    //0
    //               "El Salvador",  //1
    //               "Belice",       //2
    //               "Guatemala",    //3
    //               "Nicaragua",    //4
    //               "Costa Rica",   //5
    //               "Panama");      //6
    // $soy_pais = $sedes[$pais];

    /*$pro_manto = array("No", 
                       "Si");*/

    /*$pro_manto = array("Sala Libre.", 
                       "Sala en Mantenimiento.");*/
     $pro_manto = array("0", 
                       "1");

    $hay_o_no= $pro_manto[$manto];

date_default_timezone_set('America/El_Salvador'); 
//$j = date("a").'<br>';
//$j = date("H").'<br>';
//echo $j;

//$hora = date("Y-m-d | h:i:s").'<br>';
$hora1 = date("H:i:s");
//echo $hora;
//if($j="pm"){
 //   $hora = $hora ." ". "p. m.";
 //   }else{
 //   $hora = $hora ." ". "a. m.";
 //   }
    
    //echo $hora;
  
    //echo "La descripcion guardada es: $descripcion\n";
    //date_default_timezone_set('America/El_Salvador'); 
    $fecha=date('Y-m-d');
    $mes= date('m');

    $sql = "insert into tem_hum (descripcion, temperatura, humedad, luminosidad, mantenimiento, pir_motion, mes,fecha,hora, ip, id_pais, id_sala) 
            values ('$descripcion', '$temperatura', '$humedad', '$sensor_A0', '$hay_o_no',  '$pir', '$mes','$fecha','$hora1', '$ip', '$pais', '$sala')";

    //Ejecutamos la instrucción
    mysqli_query($con, $sql);
    mysqli_close($con);

    /*******************************************************/
    //LA VARIABLE: $temperatura CAPTURA EL DATO QUE VIENE 
    //DESDE EL CIRCUITO.  34

    //LA VARIABLE: $umbralTemperatura CAPTURA EL ULTIMO VALOR
    //SETEADO EN LA BD POR EL USUARIO. TABLA ALERTAS.35
    if ($temperatura > $umbralTemperatura)
        echo "<led_1>1</led_1>";  //1 apaga
    else
        echo "<led_1>0</led_1>";  //0 enciende
                   //40  -->Default value. En caso de no haber registro en la BD.
    if ($humedad > $umbralHumedad)
        echo "<led_2>1</led_2>";
    else
        echo "<led_2>0</led_2>";
                     //500  -->Default value. En caso de no haber registro en la BD.
    //   244 EN CIRCUITO.  240 en BD.
    if ($sensor_A0 >= $umbralLuminosidad)
        echo "<led_3>1</led_3>";
    else
        echo "<led_3>0</led_3>";
    
    if(isset($sensor_A0))
        echo "<segundo>$segundo</segundo>";
    if(isset($sensor_A0))
        echo "<minuto>$minuto</minuto>";
    if(isset($sensor_A0))
        echo "<hora>$hora</hora>";

    echo "\n";

}

?>