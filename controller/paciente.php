<?php 
	require('../model/db.php');
	$dni=$_POST['dni'] ;
	$query="select pac_nom from Paciente where pac_dni='".$dni."'" ;
	$result = $mysqli->query($query);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$row_cnt = $result->num_rows ;
	print $row_cnt;
?>   