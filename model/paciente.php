<?php 
	include('../model/mysql_crud.php');
	$db = new Database();
	$db->connect();
		
		function find($dni){		
			$db->select('Paciente','pac_nom',NULL,'pac_dni='.$dni,'id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res = $db->getResult();
			
			if($res==1){
				return json_encode($row_cnt);
			}
		}
		function create(){
			if(isset($_POST['nombres']) && isset($_POST['apellidos']) 
				&& isset($_POST['direccion']) && isset($_POST['edad'])
				&& isset($_POST['peso']) && isset($_POST['sexo'])
				&& isset($_POST['dni'])){
				$query="insert into Paciente values(null,'".$_POST['nombres'].
				"','". $_POST['apellidos']."','".$_POST['direccion']."',".
				$_POST['edad'].",".$_POST['peso'].",".$_POST['sexo'].",'".
				$_POST['dni']."'";
				$result = $mysqli->query($query);
				$row_cnt = $result->num_rows ;
				json_encode($row_cnt);
			}
		}		
	
?>   