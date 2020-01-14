<?php
//http://localhost/cocesna/include/dui.php?descripcion=1&temperatura=12.33&humedad=11.11&ip=192.168.1.102&pais=1&A0=25
//http://localhost/cocesna/include/dui.php?descripcion=1&temperatura=12.33&humedad=11.11&ip=192.168.1.102&pais=1&A0=25&manto=1
include ('../include/conectar.php');  
$campoCondicion = 'id';
$tabla = 'umbral_control_load';
$umbral_temp = 'umbral_tem';
$umbral_hume = 'umbral_hum';
$umbral_lumi = 'umbral_lum';

$bd = new Conexion();

//En la siguiente variable obtengo el ultimo registro de configuracion aplicado.
$valorCondicion = $bd->muestra('id', 'umbral_control_load'); 

if($valorCondicion>0 && !empty($valorCondicion)){
    $umbralTemperatura = $bd->verValor($umbral_temp, $tabla, $campoCondicion, $valorCondicion);
    $umbralHumedad = $bd->verValor($umbral_hume, $tabla, $campoCondicion, $valorCondicion);
    $umbralLuminosidad = $bd->verValor($umbral_lumi, $tabla, $campoCondicion, $valorCondicion);
}else{
    $umbralTemperatura = 33;
    $umbralHumedad = 40;
    $umbralLuminosidad = 500;
    }

    //aca obtengo el ultimo valor guardado en el campo segundos.
    $segundos = "segundo";
    $tabla = 'sensado_time';
    $valorCondi = $bd->muestra('id', 'sensado_time'); 
if($valorCondi>0 && !empty($valorCondi)){
    $umbralSegundo= $bd->verValor($segundos, $tabla, $campoCondicion, $valorCondi);
    //$valor = ($umbralTiempo * 1000);
    $segundo = $umbralSegundo;
}else{
    $segundo = 25;
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

if (($pais!="") and ($temperatura!="") and ($humedad!="") and ($ip!="") and ($desc!="") and ($sensor_A0!="") and ($manto!="")) {
    require("config.php");
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
     
    $sedes = array("Honduras",    //0
                  "El Salvador",  //1
                  "Belice",       //2
                  "Guatemala",    //3
                  "Nicaragua",    //4
                  "Costa Rica",   //5
                  "Panama");      //6
    $soy_pais = $sedes[$pais];

    $pro_manto = array("No", 
                       "Si");
    $hay_o_no= $pro_manto[$manto];
    
    //echo "La descripcion guardada es: $descripcion\n";
    date_default_timezone_set('America/El_Salvador'); 
    $mes= date('m');

    $sql = "insert into tem_hum (descripcion, temperatura, humedad, luminosidad, mantenimiento, mes, ip, pais) 
            values ('$descripcion', '$temperatura', '$humedad', '$sensor_A0', '$hay_o_no', '$mes', '$ip', '$soy_pais')";

    // Ejecutamos la instrucción
    mysqli_query($con, $sql);
    mysqli_close($con);

    // Genera respuesta en XML para que el Arduino lo procese
                         //33 -->Default value. En caso de no haber registro en la BD.
    if ($temperatura > $umbralTemperatura)
        echo "<led_1>1</led_1>";
    else
        echo "<led_1>0</led_1>";
                   //40  -->Default value. En caso de no haber registro en la BD.
    if ($humedad > $umbralHumedad)
        echo "<led_2>1</led_2>";
    else
        echo "<led_2>0</led_2>";
                     //500  -->Default value. En caso de no haber registro en la BD.
    if ($sensor_A0 > $umbralLuminosidad)
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