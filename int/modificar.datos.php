<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programacion Movil con JQuery Mobile</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header" data-position="fixed">
			<h1>Programacion Movil</h1>
		</div>
		<div data-role="content">
<?php
			include('inc/conexion.php');
			$sql = "SELECT p.* from personas p where p.personas_id = {$_GET['id']}";
			$resultado = $conexion->query($sql);
			$fila = $resultado->fetch_assoc();
?>		
			<form method="post" action="modificar.recibe.php" name="form-nuevo">
				<h1>Modificar Persona</h1>
				<input type="hidden" name="text-id" id="text-id" value="<?php echo $fila['personas_id']; ?>">
				<label for="text-paterno">Paterno:</label>
				<input type="text" name="text-paterno" id="text-paterno" value="<?php echo $fila['paterno']; ?>" data-mini='true'>
				<label for="text-materno">Materno:</label>
				<input type="text" name="text-materno" id="text-materno" value="<?php echo $fila['materno']; ?>">
				<label for="text-nombres">Nombres:</label>
				<input type="text" name="text-nombres" id="text-nombres" value="<?php echo $fila['nombres']?>">
				<button class="ui-shadow ui-btn ui-corner-all">Guardar</button>
			</form>
		</div>
		<div data-role="footer" data-position="fixed">
			<h1>UNITEK-Puno</h1>
		</div>
	</div>
</body>
</html>