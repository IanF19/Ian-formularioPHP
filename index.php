<?php 

if ($_GET) {
	print_r($_GET);
	die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel:"stylesheet" href="form.css">
	<title>Formulario</title>
</head>
<body>
	<form action="recibe.php" name="formulario_contacto" method="">
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre">
		<input type="text" placeholder="Edad:" name="edad" id="edad">
		<br>


<!-- Radio Button -->
		<label id="H" for="hombre">Hombre</label>
		<input type="radio" name="sexo" id="hombre" value="hombre">
		<br>

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" id="mujer" value="mujer">
		<br>

<!-- Combobox -->
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
		</select>
		<br>

<!-- Checkbox -->
		<label for="terminos">Terminos y Condiciones</label>
		<input type="checkbox" name="terminos" value="ok" id="terminos">
		<br>

		<input type="submit" name="btn-enviar" vale="Enviar">
	</form>
	<img class="img" src="descarga.jpg" alt="random" />
</body>
</html>
