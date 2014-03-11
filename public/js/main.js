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
}