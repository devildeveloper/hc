<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Historias Clinicas</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
	<link rel="stylesheet" href="../public/css/main.css">
</head>
<body >
	<section id='new-user'>
		<h1>Nuevo Paciente</h1>
		<form action="paciente.php" method="POST" >
			<input type="hiden" name='paciente' value='1'>
			<input type="text" name='dni' required readonly value='<?php echo($_POST["dni"]) ;?>'>			
			<input type="text" name="nombres" required placeholder="Nombre">
			<input type="text" name="apellidos" required placeholder="Apellido">
			<textarea name="direcion" cols="10" rows="3" required placeholder="Direccion"></textarea>
			<input type="text" name='edad' required placeholder='Edad'>
			<input type="text" name='peso' required placeholder='Peso'>
			<fieldset>
				<input type="radio" name='sexo' value='Varon' checked>Varon
				<input type="radio" name='sexo' value='Mujer' > Mujer				
			</fieldset>
			<input class='pure-button pure-button-primary' type="submit" value="Enviar">
			<input class="pure-button button-warning" type="reset" value="Cancelar">	
		</form>
	</section>
</body>
</html>