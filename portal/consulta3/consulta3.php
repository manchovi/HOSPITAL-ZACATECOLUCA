<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>***Reporte de Personal Registro.</title>
    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    --> 
    <link type="text/css" rel="stylesheet" href="./css/estilo.css">
    
    <!-- Bootstrap Core Css -->
    <link href="./plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="./plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./css/themes/all-themes.css" rel="stylesheet" />
    
    <!--
    <script src="../../lib/jquery-3.3.1.min.js"></script>
    <script src="../../lib/sweetalert2.min.js"></script>
    <script src="../../js/alertas_mias.js"></script>
    <link rel="stylesheet" href="../../lib/sweetalert2.min.css" type="text/css">
    -->
    
    <script src="./lib/sweetalert2.all.min.js"></script>
    <script src="./lib/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        //INICIO:
        //document.getElementById('message').onclick = function() {
        $("#closesesion").click(function(){
        swal({
         title: '�Esta seguro de cerrar su sesion?',
         text: "Puedes Iniciar Sesion Nuevamente Cuando lo Desee.",
         type: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Aceptar',
         cancelButtonText: 'Cancelar'
       }).then((result) => {
         if (result.value) {
           //swal('Congrats!','You are the winner!','success')
           window.location = '../../cerrar_sesion.do';
         }else{
           swal('EXCELENTE','Buena elecci�n, continuas dentro del sistema.','success');
         }
       })
      });
      //FIN
            
 });
</script>
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
                                <table id="tabla" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <!-- <table id="tabla" class="table table-bordered table-striped table-hover"> -->
                                    <thead>
                                        <tr>
											<th class="text-center">#</th>
											<th class="text-center">Temperatura</th>
											<th class="text-center">Humedad</th>
											<th class="text-center">Luminaria # 1</th>
											<th class="text-center">Luminaria # 2</th>
											<th class="text-center">Luminaria # 3</th>
											<th class="text-center">Luminaria # 4</th>
											<th class="text-center">Luminaria # 5</th>
											<th class="text-center">Luminaria # 6</th>
											<th class="text-center">Fecha - Hora</th>
										</tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th class="text-center">#</th>
											<th class="text-center">Temperatura</th>
											<th class="text-center">Humedad</th>
											<th class="text-center">Luminaria # 1</th>
											<th class="text-center">Luminaria # 2</th>
											<th class="text-center">Luminaria # 3</th>
											<th class="text-center">Luminaria # 4</th>
											<th class="text-center">Luminaria # 5</th>
											<th class="text-center">Luminaria # 6</th>
											<th class="text-center">Fecha - Hora</th>
										</tr>
                                    </tfoot>
                                    <tbody>
                                   
                                   
                                    <?php 
										include_once("conn.php");
										$conta = 1;
										$sql="SELECT * from sensores ORDER BY id_sensor DESC";
										//$sql="SELECT * from sensores ORDER BY id_sensor DESC LIMIT 5";
										$result=mysqli_query($conn,$sql);
										while($mostrar=mysqli_fetch_array($result)){
										?>
										<tr>
											<td><?php echo $conta++ ?></td>
											<td><?php echo $mostrar['temperatura'] ?></td>
											<td><?php echo $mostrar['humedad'] ?></td>
											<td><?php echo $mostrar['luz1'] ?></td>
											<td><?php echo $mostrar['luz2'] ?></td>
											<td><?php echo $mostrar['luz3'] ?></td>
											<td><?php echo $mostrar['luz4'] ?></td>
											<td><?php echo $mostrar['luz5'] ?></td>
											<td><?php echo $mostrar['luz6'] ?></td>
											<td><?php echo $mostrar['fecha'] ." ".  $mostrar['hora'] ?></td>
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
    <script src="./plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="./plugins/bootstrap/js/bootstrap.js"></script>

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

    <script>
          $(document).ready(function(){
              $('#tabla').DataTable();
          });
      </script>

</body>
</html>
