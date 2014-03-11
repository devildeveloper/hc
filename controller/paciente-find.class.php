<?php 
	require_once('../model/db.class.php');
	$dni=$_GET['dni'];
	$q="select pac_nom from paciente where pac_dni='".$dni."'";
	$db= new database();
	print $db->numero_de_filas($db->consulta($q));


	$db->consulta($q);	
?>