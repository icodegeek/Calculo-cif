<?php
	$dni = $_GET['dni'];

	$letra = substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calcular letra DNI</title>
</head>
<body>
	<h1>CIF: <?=$dni?>-<?=$letra?></h1>	
</body>
</html>