<?php
	include('../model/mysql_crud.php');
	$db = new Database();
	$db->connect();
	if(isset($_POST['nombres']) && isset($_POST['apellidos']) 
		&& isset($_POST['direccion']) && isset($_POST['edad'])
		&& isset($_POST['peso']) && isset($_POST['sexo'])
		&& isset($_POST['dni'])){
			$data= array("pac_nom"=>(string)$_POST['nombres'],"pac_ape"=>(string)$_POST['apellidos'],"pac_dir"=>(string)$_POST['direccion'],"pac_edad"=>(int)$_POST['edad'],"pac_peso"=>(float)$_POST['peso'],"pac_sexo"=>(int)$_POST['sexo'],"pac_dni"=>(string)$_POST['dni']);
			$db->insert('Paciente',$data);  // Table name, column names and respective values
			$res = $db->getResult(); 
	}
	elseif(isset($_POST['dni'])){			
		$db->select('Paciente','pac_nom',NULL,"pac_dni='".$_POST['dni']."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();	
		if(count($res) == 1){
			include('../view/nuevo-hc.php');
		}
		if(count($res) == 0) {
			include('../view/nuevo-paciente.php');
		}

	}
?>