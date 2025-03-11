<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="" method="get">
	Ingrese un número: <input type="text" name="a" placeholder="Solo números">
	<input type="submit" value="calcular"></form>
	<?php
	if ($_GET) 
		$u=$_GET[a]+$_GET[a];
		echo "El resultado es: "+$u;
	?>
</body>
</html>