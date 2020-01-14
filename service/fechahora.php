<?php

        date_default_timezone_set('America/El_Salvador'); 
        $horamilitar = date("H:i:s a");   //Hora MILITAR 24 H.
        $hora = date("h:i:s");          //Hora NORMAL  12 H.
        $fecha=date('Y-m-d');
        $mes= date('m');
        
        echo "La fecha es: ".$fecha."<br>";
        echo "La hora normal es: ".$hora."<br>";
        echo "La hora militar es: ".$horamilitar."<br>";

?>