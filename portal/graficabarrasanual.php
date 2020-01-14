<!DOCTYPE html>
<html lang="es">
<head>
	<title>Gráfica de Líneas Temperatura y Humedad Relativa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <link rel="icon" href="./favicon.ico" type="image/x-icon"> -->
	<link rel="shortcut icon" href="./assets/img/utla.png">
	
	<link type="text/css" rel="stylesheet" href="./css/estilo.css" />
    <!-- Bootstrap Core Css -->
    <link href="./plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="./plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="./plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="./plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="./css/style.css" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./css/themes/all-themes.css" rel="stylesheet" />
	
	<link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./css/main.css"  rel="stylesheet" />

	<script type="text/javascript" src="./js/Chart.bundle.min.js"></script>

	<!--<script src="jquery-2.1.1.min.js"></script>-->
</head>
<body>

	<!-- SideBar -->
	<?php
		include("header.php");
	?>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<?php
			include("navbar.php");
		?>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Estadística Mensual / Anual<small> -->Temperatura y Humedad Relativa. <a href="graficabarrasanual.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a></small></h1>
			</div>
		</div>

		<?php

			include_once("conn.php");
			$temperatura = 'temperatura';
			$humedad = 'humedad';
			$fecha = 'fecha';
			$hora = 'hora';

			//query to get data from the table
			/*$sql = "SELECT * FROM `sensores`  ORDER BY id_sensor DESC LIMIT 10 ";
			$result = mysqli_query($conn, $sql);*/

			//loop through the returned data
			/*while ($row = mysqli_fetch_array($result)) {
				$temperatura = $temperatura . '"'. $row['temperatura'].'",';
				$humedad = $humedad . '"'. $row['humedad'] .'",';
				$fecha = $fecha . '"'. $row['fecha'] ."~" . $row['hora'] .'",';
				//$hora = $hora . '"'. $row['hora'] .'",';
			}
			$temperatura = trim($temperatura,"temperatura");
			$humedad = trim($humedad,"humedad");
			$fecha = trim($fecha,"fecha");*/

		?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12" > 
					<canvas id="chart" style="width: 100%; height: 95vh; background: #fff; border: 1px solid #555652; margin-top: 10px;"></canvas>
					<script>
						var ctx = document.getElementById("chart").getContext('2d');
						var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							//labels: [1,2,3,4,5,6,7,8,9,10],
							labels: [<?php
								$mesesi = [];
								//$sql = " select mes from tem_hum GROUP BY mes";
								$sql = "select mes from sensores GROUP BY mes";
								$result = mysqli_query($conn, $sql);
								while($registros = mysqli_fetch_array($result)){
										$mes = $registros["mes"];
										$mesesi[] = $registros["mes"];

										if ($mes==1) {
											$mes = "Enero";
										}
										if ($mes==2) {
											$mes = "Febrero";
										}
										if ($mes==3) {
											$mes = "Marzo";
										}
										if ($mes==4) {
											$mes = "Abril";
										}
										if ($mes==5) {
											$mes = "Mayo";
										}
										if ($mes==6) {
											$mes = "Junio";
										}
										if ($mes==7) {
											$mes = "Julio";
										}
										if ($mes==8) {
											$mes = "Agosto";
										}
										if ($mes==9) {
											$mes = "Septiembre";
										}
										if ($mes==10) {
											$mes = "Octubre";
										}
										if ($mes==11) {
											$mes = "Noviembre";
										}
										if ($mes==12) {
											$mes = "Diciembre";
										}
										?>
										'<?php echo  $mes; ?>',
									<?php
								}
							?>],
							datasets: 
							[{
								label: 'Temperatura [°C]',
								//data: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
								data: [<?php 
										$query = "select avg(temperatura) as temperatura from sensores group by mes";
										$resultados = mysqli_query($conn, $query);
										while($rows = mysqli_fetch_array($resultados)){
											?>
												<?php echo $rows["temperatura"]?>,
											<?php
										}								
									  ?>],
								backgroundColor: 'sky-blue',
								borderColor:'black',
								//borderColor:'rgba(255,0,0)',
								borderWidth: 2
							},

							{
								label: 'Humedad Relativa [%]',
								//data: [3, 6, 9, 12, 15, 18, 21, 24, 27, 30],
								data: [
									<?php
										$query = "select avg(humedad) as humedad from sensores group by mes";
										$resultados = mysqli_query($conn, $query);
										while($rows = mysqli_fetch_array($resultados)){
											?>
												<?php echo $rows["humedad"]?>,
											<?php
										}
									?>
									],
								backgroundColor: 'grey',
								borderColor:'black',
								//borderColor:'rgba(0,0,0)',
								borderWidth: 2	
							}]
						},
					
						options: {
							scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
							tooltips:{mode: 'index'},
							legend:{display: true, position: 'top', labels: {fontColor: 'rgb(0,0,255)', fontSize: 16}}
						}
					});
					</script>
				</div>
			</div>
		</div>

		<!-- Footer - Pie --> 
		<?php include("footer.php"); ?>

	</section>

	<!-- Notifications area -->

	<!-- Dialog help -->
	<?php include("dialoghelp.php"); ?>

	<!--====== Scripts -->
	<!-- <script src="./js/jquery-3.1.1.min.js"></script> -->
	<script src="./plugins/jquery/jquery.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<!-- <script src="./js/bootstrap.min.js"></script> -->
	<script src="./plugins/bootstrap/js/bootstrap.js"></script>
	<script src="./js/material.min.js"></script>
	

	<!-- Jquery Core Js -->
    <!-- <script src="./plugins/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap Core Js -->
    <!-- <script src="./plugins/bootstrap/js/bootstrap.js"></script> -->
    <!-- Select Plugin Js -->
    <script src="./plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="./plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="./plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="./plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="./plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Custom Js -->
    <script src="./js/admin.js"></script>
    <script src="./js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="./js/demo.js"></script>


	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<!-- <script>
		$.material.init();
	</script> -->
	<script>
          $(document).ready(function(){
              $('#tabla').DataTable();
          });
      </script>

</body>
</html>