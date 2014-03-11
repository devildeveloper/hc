<?php 
	require_once('../model/db.class.php');
	class Paciente {
		function validate(){
			$token=true;
			if  isset($_POST['dni'])){
				$this->$dni=$_POST['dni'];
			}else{
				$token=false;
			}
			return $token;
		}
		function find(){
			if($this->validate){
				$q= new database();
				$r=$q->consulta("select pac_dni from paciente where pac_dni='$this->$dni'");
				print $q;
			}
		}
		$this->find();
	}
?>