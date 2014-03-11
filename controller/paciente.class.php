<?php 
	require_once('../model/db.class.php');
	class Paciente {
		function validate(){
			$token=true;
			if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['dir']) && isset($_POST['edad']) && isset($_POST['peso']) && isset($_POST['sexo']) && isset($_POST['dni'])){
				$this->$nombre=$_POST['nombre'];
				$this->$apellido=$_POST['apellido'];
				$this->$dir=$_POST['dir'];
				$this->$edad=$_POST['edad'];
				$this->$peso=$_POST['peso'];
				$this->$sexo=$_POST['sexo'];
				$this->$dni=$_POST['dni'];
			}else{
				$token=false;
			}
			return $token;
		}
		function nuevo(){
			if($this->validate){
				$q= new database();
				$r=$q->consulta("insert into paciente values('$this->$nombre','$this->$apellido','$this->$dir',$this->$edad,$this->$peso,$this->$sexo,'$this->$dni')");
				print $q;
			}
		}
		$this->nuevo();
	}
?>