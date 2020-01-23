<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<link rel="shortcut icon" href="./assets/img/logo.png">
	<meta charset="UTF-8">
	<!-- <meta content="text/html;charset=utf-8" http-equiv="Content-Type"> -->
    <!-- <meta content="utf-8" http-equiv="encoding"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
	
	<!-- CSS  -->
	<link href="./css/fuente.css" rel="stylesheet">
	<link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="./css/main.css">

	<!--<script src="jquery-2.1.1.min.js"></script>-->
</head>
<body>
	<!-- SideBar -->
	
	<?php
        //header('Content-Type: text/html; charset=utf-8');
		include("header.php");
		
	?>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
	<!-- <section class="content"> -->
		
		<!-- NavBar -->
		<?php
			include("navbar.php");
		?>


        <!-- Content page -->
    	<?php //include("conexion/foc2_ajax.php");  //Eso 2 ?>

		<!--  <section class="content">  -->
		<section class="full-box"> 
        <div class="container-fluid">
			<div class="row"></div>
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>


            <?php //include("conexion/foc2_ajax1.php");
			//include("conexion/lectura_sensores.php");  //Eso 1
		    ?>


			 <!-- Marcos #1 -->
			 <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">playlist_add_check</i> -->
                            <img src="assets/img/7.png" height="80" width="80" alt="icono temperature" />
                        </div>
                        <div class="content">
                            <div class="text">Temperatura Corporal</div>
                            <div id="tc_gc" class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">0  °C</div>
                            <!-- <div id="fh_spo2" style= "font-size: 5px;">/div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">help</i> -->
                            <img src="assets/img/7.png" height="80" width="80" alt="icono temperature" />
                        </div>
                        <div class="content">
                            <div class="text">Temperatura Corporal</div>
                            <div id="tc_gf" class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">0 °F</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">schedule</i>
                        </div>
                        <div class="content">
                            <div class="text">Tiempo Sensado </div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">5 Min.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">VISITANTES</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Marcos 1 -->



            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Temperatura Corporal [°C]
                                <!-- <small>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</small> -->
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!--BEGIN BODY-->
                        <div class="body">

                        <div id="chartContainer5" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px; text-align: center;" >Cargando datos. Espere un momento por favor.</div>
                                <script type="text/javascript">
                                    function mostrar(){
                                        $.ajax({
                                            //type:"GET",
                                            url:"./rt_graph_temp1.php",
                                            //dataType: 'html',
                                            dataType: 'json',
                                            contentType: "application/json; charset=utf-8",
                                            method: "GET",
                                            success:function(data){
                                                //var datos = JSON.parse(data)
                                                var tempe = [];
                                                var fecha = [];
                                                for(var i=0;i<data.length;i++){
                                                //for (var i in data) {
                                                        tempe.push(data[i].temp_corporal);
                                                        fecha.push(data[i].fecha);
                                                    }

                                                //console.log(data[5].y);
                                                //console.log(data[data.length-1].y);
                                                //var t_gc = data[data.length-1].y;                   //Estoy tomando el último registro.
                                                var t_gc = data[0].y;                                 //Estoy tomando el primer valor encontrado de la temperatura.
                                                var t_gf = (Number(t_gc * 1.8)+32.0).toFixed(2);
                                                $("#tc_gc").html(t_gc + " °C");
                                                //console.log("Tempe C: "+t_gc);
                                                $("#tc_gf").html(t_gf + " °F");
                                                //console.log("Tempe F: "+t_gf);
                                            
                                                //console.log(data.length);
                                                //console.log(data);

                                                var chart = new CanvasJS.Chart("chartContainer5", {
                                                theme: "dark1",                   // "light2", "dark1", "dark2"
                                                animationEnabled: false,          // change to true		
                                                zoomEnabled: true,
                                                exportFileName: "TemperaturaCorporal",
                                                exportEnabled: true,
                                                title:{
                                                    text: "Temperatura [°C]",
                                                    //color: "yellow",
                                                    fontSize: 20
                                                    //margin: 25
                                                },
                                                subtitles: [{
                                                            text: "Paciente xxx000",
                                                            fontSize: 16,
                                                            margin: 20
                                                        }],
                                                axisX: {
                                                    interval: 25,          //Esta propiedad la probaré luego.
                                                    title: "X-Axis",
                                                    //titleFontColor: "yellow",
                                                    titleFontSize: 20,
                                                    crosshair: {
                                                                enabled: true,
                                                                snapToDataPoint: true
                                                                }
                                                },
                                                axisY: {
                                                        title: "Temperature [°C]",
                                                        //titleFontColor: "yellow",
                                                        titleFontSize: 20,
                                                        logarithmic: false, //change it to true
                                                        lineColor: "#51CDA0",
                                                        gridThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                        lineThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                        suffix: " °C",
                                                        crosshair: {
                                                        enabled: true
                                                    }
                                                },
                                                toolTip:{
                                                            shared:true
                                                        },  
                                                legend:{
                                                        cursor:"pointer",
                                                        verticalAlign: "top",
                                                        fontSize: 16,
                                                        horizontalAlign: "left",
                                                        dockInsidePlotArea: true,
                                                        //itemclick: toogleDataSeries
                                                    },
                                                /*data: [
                                                    {
                                                        dataPoints: datos
                                                    }
                                                ]*/
                                                data: [
                                                        {
                                                        //type: "line",  //line, stackedBar, stackedBar
                                                        type: "line",  
                                                        //type: "spline",     
                                                        lineThickness: 4,            //Defino Grosor de la linea principal
                                                        fillOpacity: .3,      
                                                        yValueFormatString: "#,### °C",
                                                        indexLabel: "{y}",
                                                        showInLegend: true,
                                                        name: "Temperatura [°C]",
                                                        lineDashType: "shortDot",  //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                        markerType: "cross",      //none, circle, square, triangle and cross. Default: circle
                                                        markerSize: 20,
                                                        //ValueFormatString:        "DD MMM, YYYY",
                                                        color: "#22aa77",
                                                        lineColor: "red",
                                                        dataPoints: data
                                                        //dataPoints: datos
                                                        /*  dataPoints: [{ label: x,  y: y  }] */
                                                        /*  dataPoints: [
                                                                        { label: "apple",  y: 10  },
                                                                        { label: "orange", y: 15  },
                                                                        { label: "banana", y: 25  },
                                                                        { label: "mango",  y: 30  },
                                                                        { label: "grape",  y: 28  }
                                                                    ] */
                                                        }
                                                    ] 
                                            });
                                            chart.render();

                                        /*  function toogleDataSeries(e){
                                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                                e.dataSeries.visible = false;
                                            } else{
                                                e.dataSeries.visible = true;
                                            }
                                            chart.render();
                                            } */

                                        },
                                            error: function(data) {
                                                console.log(data);
                                            }
                                    });
                                }
                                setInterval(mostrar,1000);
                                </script>
                                <!--Fin Gráfica Línea-->
                              
                        </div>
                        <!--END BODY-->

                    </div>
                </div>
                <!-- #END# Basic Examples -->


                <!-- With Icons -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Frecuencia Respiratoria
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="material-icons">home</i> Home
                                </li>
                            </ol>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li class="active">
                                    <i class="material-icons">library_books</i> Library
                                </li>
                            </ol>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">library_books</i> Library
                                    </a>
                                </li>
                                <li class="active">
                                    <i class="material-icons">archive</i> Data
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- #END# With Icons -->

            </div>





			<!-- Grafica # 1: Temperatura -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Monitor de Variable Biométrica: Temperatura Corporal</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div class="body">
                            <!-- div id="real_time_chart" class="dashboard-flot-chart"> -->
                            <div class="row">
				            <div class="col-xs-12" > 

                            <?php  
                            ?>
                                
                               <!--  <canvas id="line_chart1" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;"></canvas> -->                             
                                <!--Inicio Gráfica Línea-->
                                <div id="chartContainer1" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px; text-align: center;" >Cargando datos. Espere un momento por favor.</div>
                                <script type="text/javascript">
                                    function mostrar(){
                                        $.ajax({
                                            //type:"GET",
                                            url:"./rt_graph_temp1.php",
                                            //dataType: 'html',
                                            dataType: 'json',
                                            contentType: "application/json; charset=utf-8",
                                            method: "GET",
                                            success:function(data){
                                                //var datos = JSON.parse(data)
                                                var tempe = [];
                                                var fecha = [];
                                                for(var i=0;i<data.length;i++){
                                                //for (var i in data) {
                                                        tempe.push(data[i].temp_corporal);
                                                        fecha.push(data[i].fecha);
                                                    }

                                                //console.log(data[5].y);
                                                //console.log(data[data.length-1].y);
                                                //var t_gc = data[data.length-1].y;                   //Estoy tomando el último registro.
                                                var t_gc = data[0].y;                                 //Estoy tomando el primer valor encontrado de la temperatura.
                                                var t_gf = (Number(t_gc * 1.8)+32.0).toFixed(2);
                                                $("#tc_gc").html(t_gc + " °C");
                                                //console.log("Tempe C: "+t_gc);
                                                $("#tc_gf").html(t_gf + " °F");
                                                //console.log("Tempe F: "+t_gf);
                                            
                                                //console.log(data.length);
                                                //console.log(data);

                                                var chart = new CanvasJS.Chart("chartContainer1", {
                                                theme: "dark1",                   // "light2", "dark1", "dark2"
                                                animationEnabled: false,          // change to true		
                                                zoomEnabled: true,
                                                exportFileName: "TemperaturaCorporal",
                                                exportEnabled: true,
                                                title:{
                                                    text: "Temperatura [°C]",
                                                    //color: "yellow",
                                                    fontSize: 20
                                                    //margin: 25
                                                },
                                                subtitles: [{
                                                            text: "Paciente xxx000",
                                                            fontSize: 16,
                                                            margin: 20
                                                        }],
                                                axisX: {
                                                    interval: 25,          //Esta propiedad la probaré luego.
                                                    title: "X-Axis",
                                                    //titleFontColor: "yellow",
                                                    titleFontSize: 20,
                                                    crosshair: {
                                                                enabled: true,
                                                                snapToDataPoint: true
                                                                }
                                                },
                                                axisY: {
                                                        title: "Temperature [°C]",
                                                        //titleFontColor: "yellow",
                                                        titleFontSize: 20,
                                                        logarithmic: false, //change it to true
                                                        lineColor: "#51CDA0",
                                                        gridThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                        lineThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                        suffix: " °C",
                                                        crosshair: {
                                                        enabled: true
                                                    }
                                                },
                                                toolTip:{
                                                            shared:true
                                                        },  
                                                legend:{
                                                        cursor:"pointer",
                                                        verticalAlign: "top",
                                                        fontSize: 16,
                                                        horizontalAlign: "left",
                                                        dockInsidePlotArea: true,
                                                        //itemclick: toogleDataSeries
                                                    },
                                                /*data: [
                                                    {
                                                        dataPoints: datos
                                                    }
                                                ]*/
                                                data: [
                                                        {
                                                        //type: "line",  //line, stackedBar, stackedBar
                                                        type: "line",  
                                                        //type: "spline",     
                                                        lineThickness: 4,            //Defino Grosor de la linea principal
                                                        fillOpacity: .3,      
                                                        yValueFormatString: "#,### °C",
                                                        indexLabel: "{y}",
                                                        showInLegend: true,
                                                        name: "Temperatura [°C]",
                                                        lineDashType: "shortDot",  //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                        markerType: "cross",      //none, circle, square, triangle and cross. Default: circle
                                                        markerSize: 20,
                                                        //ValueFormatString:        "DD MMM, YYYY",
                                                        color: "#22aa77",
                                                        lineColor: "red",
                                                        dataPoints: data
                                                        //dataPoints: datos
                                                        /*  dataPoints: [{ label: x,  y: y  }] */
                                                        /*  dataPoints: [
                                                                        { label: "apple",  y: 10  },
                                                                        { label: "orange", y: 15  },
                                                                        { label: "banana", y: 25  },
                                                                        { label: "mango",  y: 30  },
                                                                        { label: "grape",  y: 28  }
                                                                    ] */
                                                        }
                                                    ] 
                                            });
                                            chart.render();

                                        /*  function toogleDataSeries(e){
                                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                                e.dataSeries.visible = false;
                                            } else{
                                                e.dataSeries.visible = true;
                                            }
                                            chart.render();
                                            } */

                                        },
                                            error: function(data) {
                                                console.log(data);
                                            }
                                    });
                                }
                                setInterval(mostrar,10000);
                                </script>
                                <!--Fin Gráfica Línea-->
                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Grafica # 1: Temperatura -->







            <!-- Marcos #1 -->
			 <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">playlist_add_check</i> -->
                            <img src="assets/img/2.png" height="80" width="80" alt="icono spo2" />
                        </div>
                        <div class="content">
                            <div class="text">Frecuencia Cardiaca</div>
                            <!-- <div id="marco_fc" class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">0  PRbpm</div> -->
                            <div id="marco_fc" class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">Loading...</div>
                            <!-- <div id="fh_spo2" style= "font-size: 5px;">/div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">help</i> -->
                            <img src="assets/img/9.png" height="80" width="80" alt="icono spo2" />
                        </div>
                        <div class="content">
                            <div class="text">SpO2</div>
                            <!-- <div id="marco_spo2" class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">0 %</div> -->
                            <div id="marco_spo2" class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">Loading...</div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">schedule</i>
                        </div>
                        <div class="content">
                            <div class="text">NA </div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">5 Min.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NA1</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1</div>
                        </div>
                    </div>
                </div> -->

            </div>
            <!-- #END# Marcos 1 -->


			<!-- Grafica # 2: Oximetria -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Monitor de Variable Biométrica: Oximetría</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div class="body">
                            <!-- div id="real_time_chart" class="dashboard-flot-chart"> -->
                            <div class="row">
				            <div class="col-xs-12" > 

                            <?php  
                            ?>
                                
                               <!--  <canvas id="line_chart1" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;"></canvas> -->                             
                                <!--Inicio Gráfica Línea-->
                                <div id="chartContainer2" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px; text-align: center;" >Cargando datos. Espere un momento por favor.</div>
                                <script type="text/javascript">
                                    function mostrar(){
                                        $.ajax({
                                            //type:"GET",
                                            url:"./rt_graph_oximetria.php",
                                            //dataType: 'html',
                                            dataType: 'json',
                                            contentType: "application/json; charset=utf-8",
                                            method: "GET",
                                            success:function(data){
                                                var dataPoints_frecardiaca = [];
                                                var dataPoints_spo2 = [];
                                                //var datos = JSON.parse(data)
                                                for(var i=0;i<data.length;i++){
                                                //for (var i in data) {
                                                        dataPoints_frecardiaca.push({label: data[i].label, y: data[i].frec_cardiaca});  
                                                        dataPoints_spo2.push({label: data[i].label, y: data[i].spo2});     
                                                    }

                                                var marco_fcardia = data[0].frec_cardiaca;                                 //Estoy tomando el primer valor encontrado de la temperatura.
                                                var marco_sp = data[0].spo2;
                                                
                                                $("#marco_fc").html(marco_fcardia + "  PRbpm");
                                                $("#marco_spo2").html(marco_sp + "  %");

                                                var chart = new CanvasJS.Chart("chartContainer2", {
                                                theme: "dark1",                   // "light2", "dark1", "dark2"
                                                animationEnabled: false,          // change to true		
                                                zoomEnabled: true,
                                                exportFileName: "Oximetria_graph",
                                                exportEnabled: true,
                                                title:{
                                                    text: "Oximetría",
                                                    //color: "yellow",
                                                    fontSize: 20
                                                    //margin: 25
                                                },
                                                subtitles: [{
                                                            text: "Paciente xxx000",
                                                            fontSize: 16,
                                                            margin: 20
                                                        }],
                                                axisX: {
                                                    interval: 25,          //Esta propiedad la probaré luego.
                                                    title: "X-Axis",
                                                    //titleFontColor: "yellow",
                                                    titleFontSize: 20,
                                                    crosshair: {
                                                                enabled: true,
                                                                snapToDataPoint: true
                                                                }
                                                },
                                                axisY: {
                                                        title: "Y-Axis ~ [Dato]",
                                                        //titleFontColor: "yellow",
                                                        titleFontSize: 20,
                                                        logarithmic: false, //change it to true
                                                        lineColor: "#51CDA0",
                                                        gridThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                        lineThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                        //suffix: " °C",
                                                        crosshair: {
                                                        enabled: true
                                                    }
                                                },
                                                toolTip:{
                                                            shared:true
                                                        },  
                                                legend:{
                                                        cursor:"pointer",
                                                        verticalAlign: "bottom",
                                                        fontSize: 16,
                                                        horizontalAlign: "center",
                                                        dockInsidePlotArea: false,
                                                        //itemclick: toogleDataSeries
                                                    },
                                                /*data: [
                                                    {
                                                        dataPoints: datos
                                                    }
                                                ]*/
                                                data: [
                                                        {
                                                        //type: "line",  //line, stackedBar, stackedBar
                                                        type: "line",  
                                                        //type: "spline",     
                                                        lineThickness: 4,            //Defino Grosor de la linea principal
                                                        fillOpacity: .3,      
                                                        //yValueFormatString: "#,### °C",
                                                        indexLabel: "{y} PRbpm",
                                                        showInLegend: true,
                                                        name: "Frec. Cardiaca",
                                                        lineDashType: "shortDot",  //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                        markerType: "cross",      //none, circle, square, triangle and cross. Default: circle
                                                        markerSize: 20,
                                                        //ValueFormatString:        "DD MMM, YYYY",
                                                        color: "#22aa77",
                                                        lineColor: "red",
                                                        dataPoints: dataPoints_frecardiaca
                                                        },
                                                        {
                                                        type: "line",
                                                        lineThickness: 4,                           //Defino Grosor de la linea principal
                                                        fillOpacity: .3,      
                                                        //yValueFormatString: "#,### °C",
                                                        indexLabel: "{y} %",
                                                        showInLegend: true,
                                                        name: "SpO2",
                                                        lineDashType: "shortDot",                    //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                        markerType: "cross",                         //none, circle, square, triangle and cross. Default: circle
                                                        markerSize: 20,
                                                        color: "#22aa77",
                                                        lineColor: "red",
                                                        dataPoints: dataPoints_spo2
                                                        }
                                                    ] 
                                            });
                                            chart.render();

                                        /*  function toogleDataSeries(e){
                                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                                e.dataSeries.visible = false;
                                            } else{
                                                e.dataSeries.visible = true;
                                            }
                                            chart.render();
                                            } */

                                        },
                                            error: function(data) {
                                                console.log(data);
                                            }
                                    });
                                }
                                setInterval(mostrar,10000);
                                </script>
                                <!--Fin Gráfica Línea-->
                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Grafica # 2: Oximetria -->







            <!-- Widgets # 2 -->
             <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">email</i> -->
                            <img src="assets/img/10.png" height="80" width="80" alt="Systolic" />
                        </div>
                        <div class="content">
                            <div class="text">Systolic ~ [mmHg]</div>
                            <div id="marco_systolic" class="number">0</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-zoom-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">devices</i> -->
                            <img src="assets/img/10.png" height="80" width="80" alt="Diastolic" />
                        </div>
                        <div class="content">
                            <div class="text">Diastolic ~ [mmHg]</div>
                            <div id="marco_diastolic" class="number">0</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">gps_fixed</i> -->
                            <img src="assets/img/10.png" height="80" width="80" alt="Diastolic" />
                        </div>
                        <div class="content">
                            <div class="text">Heart Rate ~ [bmp]</div>
                            <div id="marco_pulsemin" class="number">0</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-zoom-effect">
                        <div class="icon">
                            <!-- <i class="material-icons">access_alarm</i> -->

                        </div>
                        <div class="content">
                            <div class="text">ALARM</div>
                            <div class="number">07:00 AM</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
            <!-- #END# Widgets2 -->


            <!-- CPU Usage 2-->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>MONITOR TENSIÓN / PRESIÓN ARTERIAL</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div class="body">
                            <!-- div id="real_time_chart" class="dashboard-flot-chart"> -->
                            <div class="row">
				            <div class="col-xs-12" > 
                                <!-- Acá pondré una gráfica -->

                                    <!-- Acá pondré una gráfica -->
                                <?php

                                //header('Content-Type: application/json');
                                /*  include_once("conn.php");
                                $data_points1 = array(); 
                                $data_points2 = array(); 
                                $data_points3 = array(); 
                                //$result = mysqli_query($conn, "SELECT ta_diastolic, fecha from `tb_sensores` ORDER BY id DESC LIMIT 5");
                                $result = mysqli_query($conn, "SELECT * from `tb_sensores` ORDER BY id DESC LIMIT 5");
                                while($row = mysqli_fetch_array($result)){
                                $point = array("y" => $row['ta_diastolic'] , "label" => $row['fecha']);
                                array_push($data_points1, $point);
                                $point1 = array("y" => $row['ta_systolic'] , "label" => $row['fecha']);
                                array_push($data_points2, $point1);
                                $point2 = array("y" => $row['ta_pulse_min'] , "label" => $row['fecha']);
                                array_push($data_points3, $point2);
                                } */
                                //print_r($data_points1);        //Imprimir arreglo php


                                /* 
                                $query = "select * from datapoints";
                                $data = mysqli_query($conn, $query);
                                $dataPoints = array();
                                while ($row = mysqli_fetch_array($data, MYSQL_ASSOC)) {
                                    array_push($dataPoints, $row);
                                }
                                */
                                $hora = date("H:i:s a");

                                ?>


                                <!-- <canvas id="chartContainer" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;"></canvas> -->
                                <!--Inicio Gráfica Línea-->
                                <div id="chartContainer" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;" ></div>
                                <script type="text/javascript">
                                function mostrar(){
                                    $.ajax({
                                        //type:"GET",
                                        url:"./rt_graph_ta.php",
                                        //dataType: 'html',
                                        dataType: 'json',
                                        contentType: "application/json; charset=utf-8",
                                        method: "GET",
                                        success:function(data){
                                            var dataPoints_diastolic = [];
                                            var dataPoints_systolic = [];
                                            var dataPoints_pulsemin = [];
                                            /*
                                            $.each(data, function(key, value){
                                                dataPoints.push({x: value[0], y: value[1]});    
                                            }); */
                                            //var datos = JSON.parse(data)
                                            var tempe = [];
                                            var fecha = [];
                                            for(var i=0;i<data.length;i++){
                                            //for (var i in data) {
                                                    //tempe.push(data[i].temp_corporal);
                                                    //fecha.push(data[i].fecha);
                                                    //console.log("Diastolic: "+data[i].ta_diastolic);
                                                    //console.log("Fecha: "+data[i].label);
                                                    //dataPoints.push({x: data[i].label, y: data[i].ta_diastolic});
                                                    dataPoints_diastolic.push({label: data[i].label, y: data[i].ta_diastolic});  
                                                    dataPoints_systolic.push({label: data[i].label, y: data[i].ta_systolic});      
                                                    dataPoints_pulsemin.push({label: data[i].label, y: data[i].ta_pulse_min});            
                                                }

                                            //console.log(data[5].y);
                                            //console.log(data[data.length-1].y);
                                            //var t_gc = data[data.length-1].y;                   //Estoy tomando el último registro.
                                            var marco_diastolic = data[0].ta_diastolic;                                 //Estoy tomando el primer valor encontrado de la temperatura.
                                            var marco_systolic = data[0].ta_systolic;
                                            var marco_pulsemin = data[0].ta_pulse_min;
                                            
                                            $("#marco_diastolic").html(marco_diastolic + "  mmHg");
                                            $("#marco_systolic").html(marco_systolic + "  mmHg");
                                            $("#marco_pulsemin").html(marco_pulsemin + "  bpm");
                                            //console.log("Tempe F: "+t_gf);
                                            //console.log(datoPoints);

                                            var chart = new CanvasJS.Chart("chartContainer", {
                                            theme: "dark1",                   // "light2", "dark1", "dark2"
                                            animationEnabled: false,          // change to true		
                                            zoomEnabled: true,
                                            exportFileName: "Tensión_Arterial",
                                            exportEnabled: true,
                                            title:{
                                                text: "Lecturas de variable fisiológica de la Tensión Arterial",
                                                //color: "yellow",
                                                fontSize: 20
                                                //margin: 25
                                            },
                                            subtitles: [{
                                                        text: "Paciente xxx000",
                                                        fontSize: 16,
                                                        margin: 20
                                                        
                                                    }],
                                            axisX: {
                                                interval: 25,          //Esta propiedad la probaré luego.
                                                title: "X-Axis - [Fecha]",
                                                //titleFontColor: "yellow",
                                                titleFontSize: 20,
                                                crosshair: {
                                                            enabled: true,
                                                            snapToDataPoint: true
                                                            }
                                            },
                                            axisY: {
                                                    title: "Y-Axis ~ [Dato]",
                                                    //titleFontColor: "yellow",
                                                    titleFontSize: 20,
                                                    logarithmic: false, //change it to true
                                                    lineColor: "#51CDA0",
                                                    gridThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                    lineThickness: 1,                     //Juego con los border del grafico. La cuadricula
                                                    //suffix: " °C",
                                                    crosshair: {
                                                                    enabled: true
                                                                }
                                            },
                                            toolTip:{
                                                        shared:true
                                                    },  
                                            legend:{
                                                    cursor:"pointer",
                                                    verticalAlign: "top",
                                                    fontSize: 16,
                                                    horizontalAlign: "right",
                                                    dockInsidePlotArea: false,
                                                    //itemclick: toogleDataSeries
                                                },
                                            data: [
                                                    {
                                                    //type: "line",  //line, stackedBar, stackedBar
                                                    type: "line",  
                                                    //type: "spline",     
                                                    lineThickness: 4,            //Defino Grosor de la linea principal
                                                    fillOpacity: .3,      
                                                    //yValueFormatString: "#,### °C",
                                                    indexLabel: "{y} mmHg",
                                                    showInLegend: true,
                                                    name: "Diastolic~[mmHg]",
                                                    lineDashType: "shortDot",  //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                    markerType: "cross",      //none, circle, square, triangle and cross. Default: circle
                                                    markerSize: 20,
                                                    //ValueFormatString:        "DD MMM, YYYY",
                                                    color: "#22aa77",
                                                    lineColor: "red",
                                                    dataPoints: dataPoints_diastolic
                                                    },
                                                    {
                                                    type: "line",
                                                    lineThickness: 4,                           //Defino Grosor de la linea principal
                                                    fillOpacity: .3,      
                                                    //yValueFormatString: "#,### °C",
                                                    indexLabel: "{y} mmHg",
                                                    showInLegend: true,
                                                    name: "Systolic~[mmHg]",
                                                    lineDashType: "shortDot",                    //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                    markerType: "cross",                         //none, circle, square, triangle and cross. Default: circle
                                                    markerSize: 20,
                                                    color: "#22aa77",
                                                    lineColor: "red",
                                                    dataPoints: dataPoints_systolic
                                                    },
                                                    {
                                                    type: "line",
                                                    lineThickness: 4,                           //Defino Grosor de la linea principal
                                                    fillOpacity: .3,      
                                                    //yValueFormatString: "#,### °C",
                                                    indexLabel: "{y} bpm",
                                                    showInLegend: true,
                                                    name: "Pulse min~[bpm]",
                                                    lineDashType: "shortDot",                    //Default: solid. solid,shortDash,shortDot,shortDashDot,shortDashDotDot,dot,dash,dashDot,longDash,longDashDot,longDashDotDot.
                                                    markerType: "cross",                         //none, circle, square, triangle and cross. Default: circle
                                                    markerSize: 20,
                                                    color: "#22aa77",
                                                    lineColor: "red",
                                                    dataPoints: dataPoints_pulsemin
                                                    }
                                                    ] 
                                        });
                                        chart.render();
                                    },
                                    error: function(data) {
                                        console.log(data);
                                    }
                                });
                                }
                                setInterval(mostrar,10000);
                                </script>
                                <!--Fin Gráfica Línea-->

                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage 2-->



			<div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                Datos del Especialísta [Dr.]
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    DUI: 
                                    <span class="pull-right"><?php echo $_SESSION['dui']; ?></span>
                                </li>
                                <li>
                                    Nombres: 
                                    <span class="pull-right"><?php echo $_SESSION['nombres']; ?></span>
                                </li>
                                <li>
                                   Apellidos: 
                                    <span class="pull-right"><?php echo $_SESSION['apellidos']; ?></span>
                                </li>
                                <li>
                                   Correo: 
                                    <span class="pull-right"><?php echo $_SESSION['email']; ?></span>
                                </li>
                                <li>
                                   Dirección: 
                                    <span class="pull-right"><?php echo $_SESSION['direccion']; ?></span>
                                </li>
                                <li>
                                   Teléfono: 
                                    <span class="pull-right"><?php echo $_SESSION['telefono']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->


				 <!-- Latest Social Trends -->
				 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">Datos del Paciente</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Nombre:
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    Dirección: 
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <!-- <li>#adminbsb</li>
                                <li>#freeadmintemplate</li>
                                <li>#bootstraptemplate</li> -->
                                <li>
                                    Teléfono:
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->

				<!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">Variables Biométricas Paciente</div>
                            <ul class="dashboard-stat-list">

                                <li>
                                    <span class="pull-center"><b>Oximetría</b></span>
                                </li>
                                <li>
                                    Frecuencia Cardiaca: 
                                    <div id="fc_1" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li><!--<div id="spo2"></div>-->
                                    SpO2
                                    <div id="spo2_1" class="pull-right">00</div>
                                   <!--  <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>

                                <li>
                                    <span class="pull-center"><b>----------------------------------------------------------</b></span>
                                </li>

                                <li>
                                    <span class="pull-center"><b>Tensión Arterial</b></span>
                                </li>

                                <li>
                                    Systolic Pressure ~ [mmHg]
                                    <div id="systolic_1" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    Diastolic Pressure ~ [mmHg]
                                    <div id="diastolic_1" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    Heart Rate ~ [bmp] 
                                    <div id="heart_1" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    <span class="pull-center"><b>----------------------------------------------------------</b></span>
                                </li>
                                <li>
                                    Frecuencia Respiratoria
                                    <div id="respira_1" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    <span class="pull-center"><b>----------------------------------------------------------</b></span>
                                </li>
                                <li>
                                    Temperatura Corporal [°C]
                                    <div id="temperatura_1" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    Temperatura Corporal [°F]
                                    <div id="temperatura1_2" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    Alarma:
                                    <div id="alarmm" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                                <li>
                                    Fecha / Hora:
                                    <div id="fh_my" class="pull-right">00</div>
                                    <!-- <span class="pull-right"><b>00</b> <small></small></span> -->
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
                <!-- #END# Answered Tickets -->

		</div>

		</section>
    	<!--HASTA AQUI-->


		<!-- Footer - Pie --> 
		<?php include("footer.php"); ?>

	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<?php
			include("dialoghelp.php");
	?>

	

    <!--====== Scripts -->
     <!-- <script type="text/javascript" src="./js/Chart.bundle.min.js"></script> -->
     <script type="text/javascript" src="./js1/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="./js1/canvasjs.min.js"></script>

	<!-- <script src="./js/jquery-3.1.1.min.js"></script> -->
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
     <!-- ChartJs -->
     <!-- <script src="./js/Chart.bundle.min.js"></script> -->
   


	<script>
		$.material.init();
	</script>

</body>
</html>