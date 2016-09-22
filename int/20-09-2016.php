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
		<div data-role="page" data-fullscreen="true">
			<div data-role="header">
				<h1>Personas</h1>
			</div>
			<div data-role="content">
				<?php include("inc/conexion.php");?>
				<?php $sql="SELECT * FROM personas";
					  $resultado=$conexion->query($sql);?>
				<ul data-role="listview"><a href="javascript:alert('Sony');">
				<?php while($fila=$resultado->fetch_assoc()){
					echo "<li>".$fila['nombres']."</li>";
				}?></a>
				</ul>
			</div>
			<div data-role="footer">
				<h1>UNITEK Puno</h1>
			</div>
		</div>
	</body>
</html>