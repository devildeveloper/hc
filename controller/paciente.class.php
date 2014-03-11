<?php 
	class Paciente {
		$nombre=null;
		$apellido=null;
		$dir=null;
		$edad=null;
		$peso=null;
		$sexo=null;
		$dni=null;
		function __construct() {
		}
		function validate(){
			$token=true;
			if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['dir']) && isset($_POST['edad']) && isset($_POST['peso']) && isset($_POST['sexo']) && isset($_POST['dni'])){
				$nombre=$_POST['nombre'];
				$apellido=$_POST['apellido'];
				$dir=$_POST['dir'];
				$edad=$_POST['edad'];
				$peso=$_POST['peso'];
				$sexo=$_POST['sexo'];
				$dni=$_POST['dni'];
			}else{
				$token=false;
			}
			return $token;
		}			
		function new(){
			$q=null;
			if($this->validate){
				$q="insert into paciente values('$nombre','$apellido','$dir',$edad,$peso,$sexo,'$dni')";
			}
		}
		function search_dni(){
			if()
		}
	}
?>