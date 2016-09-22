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
				<table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
					<thead>
						<tr>
							<th >Id</th>
							<th>Apellidos y Nombres</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
<?php
						include('inc/conexion.php');
						$sql = 'SELECT p.* from personas p';
						$resultado = $conexion->query($sql);
						$vCont = 1;
						while ($fila = $resultado->fetch_assoc())
						{
?>
							<tr>
								<th><?php echo $fila['personas_id']; ?></th>
	 							<td><?php echo $fila['paterno']; ?></td>
								<td><a href="modificar.datos.php?id=<?php echo $fila['personas_id']; ?>" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext">Modificar</a></td>
							</tr>
<?php
						}
?>			
						</tbody>
					</table>

			</div>
			<div data-role="footer">
				<h1>UNITEK Puno</h1>
			</div>
		</div>
	</body>
</html>