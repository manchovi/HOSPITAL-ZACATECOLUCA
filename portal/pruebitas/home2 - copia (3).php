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


			 <!-- Widgets #1 -->
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
            <!-- #END# Widgets -->



			<!-- CPU Usage -->
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
                                <!-- Acá pondré una gráfica -->

                                <?php
                                    /* include_once("conn.php"); */
                                    //include_once("./rt_graph_temp1.php");
                                ?>

                               
                                <!-- <canvas id="chartContainer" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;"></canvas> -->
                                <!--Inicio Gráfica Línea-->
                                <div id="chartContainer" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;" ></div>
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
                                                console.log("Tempe C: "+t_gc);
                                                $("#tc_gf").html(t_gf + " °F");
                                                console.log("Tempe F: "+t_gf);
                                            
                                                //console.log(data.length);
                                                //console.log(data);

                                                var chart = new CanvasJS.Chart("chartContainer", {
                                                theme: "light1",                   // "light2", "dark1", "dark2"
                                                animationEnabled: false,          // change to true		
                                                zoomEnabled: true,
                                                title:{
                                                    text: "Temperatura [°C]",
                                                    //color: "yellow",
                                                    fontSize: 20
                                                    //margin: 25
                                                },
                                                subtitles: [{
                                                            text: "Paciente XXXX000",
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

                                        }
                                    });
                                }
                                setInterval(mostrar,1000);
                                </script>
                                <!--Fin Gráfica Línea-->
                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->


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
                            <div id="systolic" class="number">0</div>
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
                            <div id="diastolic" class="number">0</div>
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
                            <div id="heart" class="number">0</div>
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

                                <?php
                                
                                ?>

                                
                                <canvas id="line_chart1" style="width: 100%; height: 65vh; background: #fff; border: 4px solid #555652; margin-top: 10px;"></canvas>
                                
                                <!--Inicio Gráfica Línea-->

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