<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Historias Clinicas</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
	<link rel="stylesheet" href="../public/css/main.css">
</head>
<body >
	<section id='new-hc'>
		<h1>Historia Clinica</h1>	
		<form action="/new-hc" method="POST"  >
			<h2>Nueva Historia Clinica</h2>
			<input type="text" name="dni" required readonly value='<?php echo($_POST["dni"]) ;?>'>
			<select name="medicos">
				<option value="1">1</option>
			</select>

			<input class='pure-button pure-button-primary' type="submit" value="Enviar">
			<input class="pure-button button-warning" type="reset" value="Cancelar">
		</form>
	</section>
</body>
</html>