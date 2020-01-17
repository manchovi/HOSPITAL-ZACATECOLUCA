<?php
	require 'conn.php';
	
	$cont=0;
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `tb_sensores` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($mostrar=mysqli_fetch_array($query)){
				$cont=$cont+1;
?>
	<tr>
		<!-- <td class="text-center"><?php //echo $cont ?></td> -->
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
		}else{
			echo'<tr><td colspan = "4"><center>Registros no Existen</center></td></tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `tb_sensores`  ORDER BY id DESC LIMIT 10") or die(mysqli_error());
		while($mostrar=mysqli_fetch_array($query)){
			$cont=$cont+1;
?>
	<tr>
		<!-- <td class="text-center"><?php //echo $cont ?></td> -->
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
	}
?>
