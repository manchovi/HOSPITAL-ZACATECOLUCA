<!DOCTYPE html>
<html lang="es">
<head>
	<title>Reporte Filtrado Fechas</title>
	<!-- <link rel="icon" href="./../favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="shortcut icon" href="dompdf/utla.png"> -->
	<!-- <link rel="shortcut icon" href="./assets/img/logohospital1.png"> -->
	<link rel="shortcut icon" href="logohospital.jpg">

	<meta charset="UTF-8">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
	
</head>
<body>

<?php	
	include_once("./../conn.php");
	//require './../conn.php';
	require_once("dompdf_config.inc.php");


	$cont=0;
		/* if (isset($pdf)){
			$font = Font_Metrics::get_font("Arial", "bold");
			$pdf->page_text(765, 550, "Pagina {PAGE_NUM} de {PAGE_COUNT}", $font, 9, array(0, 0, 0));
		} */

		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));

		//echo "Fecha Inicio: ".$date1."<br>";
		//echo "Fecha Final: ".$date2."<br>";

	$html = '<table width=100%><tr><td left>
									   Reporte Filtrado por Fechas
									</td>
									<td rowspan=3 align=right>
									   <img src="logohospital.jpg" alt=logoU width=100px height=100px />
									</td>
								</tr>
								<tr><td left>
									   Información Recopilada y Encontrada en Base al Criterio de Búsqueda Especificado.
									</td>
								</tr>
								<tr><td left>
									  Variables Biométricas del Paciente.
									</td>
								</tr>
			</table>';
	
	$html .= '<br><strong>Reporte Generado en Fechas:  </strong>';
	$html .= '<strong>Desde: </strong>'.$date1;
	$html .= '<strong> ~ Hasta: </strong>'.$date2;

	$html .= '<br><br><table border=1 width=100% align=center>';	
	$html .= '<thead>';
	$html .= '<tr bgcolor=grey>';
	$html .= '<th>N°</th>';
	$html .= '<th>Frec. Cardiaca </th>';
	$html .= '<th>SpO2 </th>';
	$html .= '<th>Diastolic</th>';
	$html .= '<th>Systolic</th>';
	$html .= '<th>Pulse/min</th>';
	$html .= '<th>Frec_respiratoria</th>';
	$html .= '<th>Temp. Corporal</th>';
	$html .= '<th>Alarma</th>';
	$html .= '<th>Fecha - Hora</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';


	/* $query=mysqli_query($conn, "SELECT * FROM `sensores` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
				$cont=$cont+1;
			} 
	*/
	
	//$result_request = "SELECT * FROM sensores ORDER BY id_sensor DESC LIMIT 10";
	//$resultado_request = mysqli_query($conn, $result_request);
	$resultado_request=mysqli_query($conn, "SELECT * FROM `tb_sensores` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
	
	while($mostrar = mysqli_fetch_assoc($resultado_request)){
		$cont=$cont+1;
		$html .= '<tr align=center>';
		$html .= '<td>'. $mostrar['id'] . "</td>";
		$html .= '<td>'. $mostrar['frec_cardiaca']. "</td>";
		$html .= '<td>'. $mostrar['spo2'] ."</td>";
		$html .= '<td>'. $mostrar['ta_diastolic'] . "</td>";
		$html .= '<td>'. $mostrar['ta_systolic'] . "</td>";
		$html .= '<td>'. $mostrar['ta_pulse_min'] . "</td>";
		$html .= '<td>'. $mostrar['frec_respiratoria'] . "</td>";
		$html .= '<td>'. $mostrar['temp_corporal']. " °C~" . number_format(($mostrar['temp_corporal'] * 1.8)+32.0,2) ." °F" . "</td>";
		$html .= '<td>'. $mostrar['alarma'] . "</td>";
		$html .= '<td>'. $mostrar['fecha'] ." ".  $mostrar['hora'] ."</td></tr>";		
	}
	$html .= '</tbody>';
	$html .= '</table';
	//echo $html;

	/* $codigoHTML=utf8_decode($codigoHTML);
	$dompdf=new DOMPDF();
	$dompdf->load_html($codigoHTML);
	ini_set("memory_limit","128M");
	$dompdf->render();
	$dompdf->stream("ListadoEmpleado.pdf"); */

	

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	//$dompdf->set_paper("A4", "portrait");
	$dompdf->set_paper('A4', 'landscape');                                 // (Opcional) Configurar papel y orientación
	ini_set("memory_limit","512M");
	$dompdf->render();                                                     // Generar el PDF desde contenido HTML
	$pdf = $dompdf->output();                                              // Obtener el PDF generado
	//$font = Font_Metrics::get_font("Arial", "bold");
	//$pdf->page_text(765, 550, "Pagina {PAGE_NUM} de {PAGE_COUNT}", $font, 9, array(0, 0, 0));
	$dompdf->stream("reporteUtla.pdf", array('Attachment' => 0));          // Enviar el PDF generado al navegador 
	exit(0);                                                               //Da igual si lo pongo o no.

?>

</body>
</html>