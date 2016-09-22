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
			<form method="post" action="nuevo.recibe.php" name="form-nuevo">
				<h1>Nueva Persona</h1>
				<label for="text-paterno">Paterno:</label>
				<input type="text" name="text-paterno" id="text-paterno" value="" data-mini='true'>
				<label for="text-materno">Materno:</label>
				<input type="text" name="text-materno" id="text-materno" value="">
				<label for="text-nombres">Nombres:</label>
				<input type="text" name="text-nombres" id="text-nombres" value="">
				<button class="ui-shadow ui-btn ui-corner-all">Guardar</button>
			</form>
		</div>
		<div data-role="footer" data-position="fixed">
			<h1>UNITEK-Puno</h1>
		</div>
	</div>
</body>
</html>