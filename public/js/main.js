<<<<<<< HEAD
$(document).on('ready',init);
function init(){
	$("#b1").on("click",function(){
		$.ajax({
			url:"controller/paciente.php",
			data:$("#f1").serialize(),
			method:"POST"
		}).success(function(d){
			if(d == 1){
				$(".current").fadeOut();
				$("#new-hc").delay(500).fadeIn();
				$("#new-hc input[name='dni']").val($("#f1 input[name='dni']").val())
			}else{
				$(".current").fadeOut();
				alert("El paciente no se encuentra registrado, se procedera con el registro.")
				$("#new-user").delay(500).fadeIn()
			}
		});
	});
	$("input[type='reset']").on('click',cancel);
}
function cancel(){
	var r=confirm('¿Desea abortar la operacion actual?');
	if(r){
		window.location.reload();
	}
=======
$(document).on("ready",init);
function init(){
	$("#f1").on("submit",valida_pac_01);
}
function valida_pac_01(e){
	e.preventDefault();
	$.ajax({
		url:$(this).attr('action'),
		method:"POST",
		data:$(this).serialize()
	}).done(function(data){
		if(data.length == 8){
			console.log(data);
			$dni=$("#f1 input[name='dni']").val;
			$(this).css({'display':'block'})
			$("#f2  input[name='dni']").val=$dni;
			$("#f2").css({'display':'block'})
		}else{
			console.log(data);
		}
	})
>>>>>>> 6170df2f99cf52b7896752faeb1f51e33b4df7c4
}