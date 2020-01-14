<?php
	require 'conn.php';
	
	$cont=0;
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `sensores` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
				$cont=$cont+1;
?>
	<tr>
		<td class="text-center"><?php echo $cont ?></td>
		<td class="text-center"><?php echo $fetch['temperatura']. " °C~" . number_format(($fetch['temperatura'] * 1.8)+32.0,2) ." °F"?></td>
		<td class="text-center"><?php echo $fetch['humedad']?></td>
		<td class="text-center"><?php echo $fetch['luz1']?></td>
		<td class="text-center"><?php echo $fetch['luz2']?></td>
		<td class="text-center"><?php echo $fetch['luz3']?></td>
		<td class="text-center"><?php echo $fetch['luz4']?></td>
		<td class="text-center"><?php echo $fetch['luz5']?></td>
		<td class="text-center"><?php echo $fetch['luz6']?></td>
		<td class="text-center"><?php echo $fetch['fecha'] . "~" . $fetch['hora'] ?></td>
	</tr>
<?php
			}
		}else{
			echo'<tr><td colspan = "4"><center>Registros no Existen</center></td></tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `sensores`  ORDER BY id_sensor DESC LIMIT 10") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
			$cont=$cont+1;
?>
	<tr>
		<td class="text-center"><?php echo $cont ?></td>
		<td class="text-center"><?php echo $fetch['temperatura'] . " °C~" . number_format(($fetch['temperatura'] * 1.8)+32.0,2) ." °F" ?></td>
		<td class="text-center"><?php echo $fetch['humedad']?></td>
		<td class="text-center"><?php echo $fetch['luz1']?></td>
		<td class="text-center"><?php echo $fetch['luz2']?></td>
		<td class="text-center"><?php echo $fetch['luz3']?></td>
		<td class="text-center"><?php echo $fetch['luz4']?></td>
		<td class="text-center"><?php echo $fetch['luz5']?></td>
		<td class="text-center"><?php echo $fetch['luz6']?></td>
		<td class="text-center"><?php echo $fetch['fecha'] . "~" . $fetch['hora']?></td>
	</tr>
<?php
		}
	}
?>
