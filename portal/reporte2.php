<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>*Historial de Datos Clínicos del Paciente
        
    </title>
    <!-- Favicon-->
    <!-- <link rel="icon" href="./favicon.ico" type="image/x-icon"> -->
    <link rel="shortcut icon" href="./assets/img/logohospital1.png">

    <!-- Google Fonts 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    --> 
    <link type="text/css" rel="stylesheet" href="./consulta3/css/estilo.css">
    
    <!-- Bootstrap Core Css -->
    <link href="./consulta3/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./consulta3/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./consulta3/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="./consulta3/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="./consulta3/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./consulta3/css/themes/all-themes.css" rel="stylesheet" />
    
    <!--
    <script src="../../lib/jquery-3.3.1.min.js"></script>
    <script src="../../lib/sweetalert2.min.js"></script>
    <script src="../../js/alertas_mias.js"></script>
    <link rel="stylesheet" href="../../lib/sweetalert2.min.css" type="text/css">
    -->
</head>

<body class="theme">    

        <!--
                class="theme-red"
                style="width: 100%"-->
            <!-- Exportable Table -->                        
                        <!--segunda tabla-->
                        <div class="row">&nbsp;</div>
                        <div class="container">
                            <div class="table-responsive">
                            <?php 
                                    /* date_default_timezone_set('America/El_Salvador'); 
                                    $hora = date("H:i:s");
                                    $fecha=date('d-m-Y');
                                    $mes= date('m');
                                    echo "Fecha de Generación Reporte: <strong>".$fecha. " " . $hora . "</strong>"; */
                                    //echo "<br><IMG src=\"./assets/img/utla.png\" width=\"80\" height=\"100\" />"; 
                            ?>  
                                <table id="tabla" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <!-- <table id="tabla" class="table table-bordered table-striped table-hover"> -->
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

                                    <tbody>
                                   
                                   
                                    <?php 
										include_once("conn.php");
										$conta = 1;
										$sql="SELECT * from tb_sensores ORDER BY id DESC";
										//$sql="SELECT * from sensores ORDER BY id_sensor DESC LIMIT 5";
										$result=mysqli_query($conn,$sql);
										while($mostrar=mysqli_fetch_array($result)){
										?>
										<tr>
                                        <td class="text-center"><?php echo $mostrar['id'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['frec_cardiaca'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['spo2'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['ta_diastolic'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['ta_systolic'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['ta_pulse_min'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['frec_respiratoria'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['temp_corporal']. " °C~" . number_format(($mostrar['temp_corporal'] * 1.8)+32.0,2) ." °F"?></td>
                                        <td class="text-center"><?php echo $mostrar['alarma'] ?></td>
                                        <td class="text-center"><?php echo $mostrar['fecha'] ." ".  $mostrar['hora'] ?></td>
										</tr>
										
									<?php 
										}
									?>
                                   
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
            <!-- #END# Exportable Table -->

    <!-- Jquery Core Js -->
    <script src="./consulta3/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="./consulta3/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="./consulta3/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="./consulta3/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="./consulta3/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="./consulta3/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="./consulta3/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="./consulta3/js/admin.js"></script>
    <script src="./consulta3/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="./consulta3/js/demo.js"></script>    

    <script>
          $(document).ready(function(){
              $('#tabla').DataTable();
          });
      </script>

</body>
</html>
