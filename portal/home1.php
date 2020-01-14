<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<link rel="shortcut icon" href="./assets/img/logo.png">
	<!--<meta charset="UTF-8">-->
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
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
		
		<!-- NavBar -->
		<?php
			include("navbar.php");
		?>


        <!-- Content page -->
		<?php //include("conexion/foc2_ajax1.php");
			include("conexion/lectura_sensores.php");
		?>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <!--<h1 class="text-titles">System <small>Tiles</small></h1>-->
			  <h1 class="text-titles" align="center">DASHBOARD DEL SISTEMA MY-SIGNALS</h1>
			  <h2 class="text-titles" align="center">Monitor 1: Lectura de sensor de Oximetría</h2>
			</div>
		</div>

		<div class="full-box text-center" style="padding: 30px 10px;">
			
			<!--De aqui esta cada sección de monitores de datos fisiológicos-->
			<article class="full-box tile">
				<!-- <div class="full-box tile-title text-center text-titles text-uppercase deep-orange darken-4"> -->
				<div class="full-box tile-title" style="background-color: rgb(252, 6, 6);">
					SPO2 ~ [%SpO2]
				</div>
				<div class="full-box tile-icon text-center " style="background-color: rgb(81, 83, 81);">
					<div class="row"></div>
						<p class="full-box" id="spo2_ico" ></p>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="spo2"></p>
					<div id="fh_spo2"><small></small></div>
				</div>
			</article>


			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles" style="background-color: rgb(252, 6, 6);">
					Frecuencia Cardiaca ~ [PRbpm]
				</div>
				<div class="full-box tile-icon text-center" style="background-color: rgb(81, 83, 81);">
					<div class="row"></div>
						<p class="full-box" id="fc_ico" ></p>	
					</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="fc"> </p>
					<div id="fh_fc"><small></small></div>
				</div>
			</article>


			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles" style="background-color: rgb(252, 6, 6);">
					Tiempo Sensado (MIN)
				</div>
				<div class="full-box tile-icon text-center" style="background-color: rgb(81, 83, 81);">
					<i class="material-icons white-text">schedule</i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="tiempo"></p>
					<div id="fh_tiempo"><small> </small></div>
				</div>
			</article>
		</div>



		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles" align="center">Monitor 2: Lecturas de Tensión/Presión Arterial</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">


		<article class="full-box tile">
				<!-- <div class="full-box tile-title text-center text-titles text-uppercase deep-orange darken-4"> -->
			<div class="full-box tile-title" style="background-color: rgb(81, 83, 81);">
					Diastolic Pressure ~ [mmHg]
			</div>
			<div class="deep-orange darken-4 full-box tile-icon text-center ">
				<div class="row"></div>
					<p class="full-box" id="diastolic_ico" ></p>
			</div>
			<div class="full-box tile-number text-titles">
				<p class="full-box" id="diastolic"></p>
				<div id="fh_diastolic"><small></small></div>
			</div>
		</article>
			
			<!-- <article class="full-box tile">
				<div class="deep-orange darken-4 full-box tile-title text-center text-titles">
					Diastolic Pressure ~ [mmHg]
				</div>
				<div class="full-box tile-icon text-center">
				<div id="colorFondoF1"></div>
				<div class="full-box tile-icon text-center" id="coloryNameIconF1"></div>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="textofoco1" ></p>
					<div id="f1"><small></small></div>
				</div>
			</article> -->

			<article class="full-box tile">
				<div class="full-box tile-title" style="background-color: rgb(81, 83, 81);">
					Systolic Pressure ~ [mmHg]
				</div>
				<div class="deep-orange darken-4 full-box tile-icon text-center">
					<div class="row"></div>
						<p class="full-box" id="systolic_ico" ></p>
					</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="systolic"></p>
					<div id="fh_systolic"><small></small></div>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title" style="background-color: rgb(81, 83, 81);">
					Heart Rate ~ [bmp]
				</div>
				<div class="deep-orange darken-4 full-box tile-icon text-center">
					<div class="row"></div>
						<p class="full-box" id="heart_ico" ></p>
					</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="heart"></p>
					<div id="fh_heart"><small></small></div>
				</div>
			</article>
			
		</div>




		<div class="container-fluid">
				<div class="page-header">
				<h1 class="text-titles" align="center">Monitor 3: Lecturas de Temperatura Corporal & Frecuencia Respiratoria</h1>
				</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">

		<article class="full-box tile">
				<div class="full-box blue accent-3 tile-title">
					Temperatura Corporal ~ [°C]
				</div>
				<!-- <div class="deep-orange darken-1 full-box tile-icon text-center"> -->
				<div class="full-box tile-icon text-center" style="background-color: rgb(81, 83, 81);">
					<div class="row"></div>
						<p class="full-box" id="temperatura_ico" ></p>
					</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="temperatura"></p>
					<div id="fh_temperatura"><small></small></div>
				</div>
		</article>

		<article class="full-box tile">
				<div class="full-box blue accent-3 tile-title">
					Temperatura Corporal ~ [°F]
				</div>
				<!-- <div class="deep-orange darken-1 full-box tile-icon text-center"> -->
				<div class="full-box tile-icon text-center" style="background-color: rgb(81, 83, 81);">
					<div class="row"></div>
						<p class="full-box" id="temperatura1_ico" ></p>
					</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="temperatura1"></p>
					<div id="fh_temperatura1"><small></small></div>
				</div>
		</article>


		<article class="full-box tile">
				<div class="full-box blue accent-3 tile-title">
					Frecuencia Respiratoria
				</div>
				<!-- <div class="deep-orange darken-1 full-box tile-icon text-center"> -->
				<div class="full-box tile-icon text-center" style="background-color: rgb(81, 83, 81);">
					<div class="row"></div>
						<p class="full-box" id="respira_ico" ></p>
					</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="respira"></p>
					<div id="fh_respira"><small></small></div>
				</div>
		</article>

			<!-- <article class="full-box tile">
				<div class="deep-orange darken-4 full-box tile-title text-center text-titles text-uppercase">
					Frecuencia Respiratoria
				</div>
				<div class="full-box tile-icon text-center">
				<div id="colorFondoF6"></div>
				<div class="full-box tile-icon text-center" id="coloryNameIconF6"></div>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box" id="textofoco6"></p>
					<div id="f6"><small></small></div>
				</div>
			</article> -->
		</div>




		<!--De aqui en adelante metí la tabla dinámica-->
		<?php include("conexion/last_file_register0.php"); ?>

		<div class="container-fluid">
				<div class="page-header">
				<!--<h1 class="text-titles">System <small>Tiles</small></h1>-->
				<h1 class="text-titles" align="center">Tabla de Datos en Tiempo Real</h1>
				</div>
		</div>
		
		<!-- <div class="full-box text-center"> -->
		<div class="container-fluid text-center">
		<div class="table-responsive">
			<table class="table table-hover text-center">
			<thead>
				<tr>
					<th class="text-center">N°</th>
					<th class="text-center">Frec. Cardiaca</th>
					<th class="text-center">SpO2</th>
					<th class="text-center">Diastolic</th>
					<th class="text-center">Systolic</th>
					<th class="text-center">Pulse/min</th>
					<th class="text-center">Frec_respiratoria</th>
					<th class="text-center">Temp. Corporal</th>
					<th class="text-center">Alarma</th>
					<th class="text-center">Fecha - Hora</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">PRbpm</th>
					<th class="text-center">%SpO2</th>
					<th class="text-center">mmHg</th>
					<th class="text-center">mmHg</th>
					<th class="text-center">bpm</th>
					<th class="text-center">Status</th>
					<th class="text-center">[°C ~ °F]</th>
					<th class="text-center">Status</th>
					<th class="text-center">Time</th>
				</tr>
			</tfoot>

			<!-- <tbody class="text-center orange"> -->
			<tbody class="text-center">
			<tr>
				<td class="text-center"><p id="id_1" class="full-box"></p></td>
				<td class="text-center"><p id="frec_cardiaca_1" class="full-box"></p></td>
				<td class="text-center"><p id="spo2_1" class="full-box"></p></td>
				<td class="text-center"><p id="diastolic_1" class="full-box"></p></td>
				<td class="text-center"><p id="systolic_1" class="full-box"></p></td>
				<td class="text-center"><p id="heart_1" class="full-box"></p></td>
				<td class="text-center"><p id="respira_1" class="full-box"></p></td>
				<td class="text-center"><p id="temperatura_1" class="full-box"></p></td>
				<td class="text-center"><p id="alarma_1" class="full-box"></p></td>
				<td class="text-center"><p id="fechahora_1" class="full-box"></p></td>
			</tr>
			</tbody>

			</table>
			
		</div>
	</div>

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
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>

</body>
</html>