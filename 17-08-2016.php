<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?php 
		$esEstudiante=false;//boolean
		$edad=18;//integer
		$valor_pi=3.1416;//double
		$nombre="jose carlos";//string
		$semestre=null;//null
		echo '<p>El tipo de $esEstudiante es: '.gettype($esEstudiante).'</p>';
		echo "<p style='color: blue'>El tipo de $esEstudiante es: ".gettype($esEstudiante)."</p>";
		
		echo '<p>El tipo de $edad es: '.gettype($edad).'</p>';
		echo "<p style='color: red'>El tipo $edad es: ".gettype($edad)."</p>";
		
		echo '<p>El tipo de $valor_pi es: '.gettype($valor_pi).'</p>';
		echo "<p style='color: green'>El tipo de $valor_pi es: ".gettype($valor_pi)."</p>";
		
		echo '<p>El tipo de $nombre es: '.gettype($nombre).'</p>';
		echo "<p style='color: red'>El tipo $nombre es: ".gettype($nombre)."</p>";

		echo '<p>El tipo de $semestre es: '.gettype($semestre).'</p>';
		echo "<p style='color: yellow'>El tipo de $semestre es: ".gettype($semestre)."</p>";

		/*******************************/
		/* Nota: pra suprimir errores */
		/** error_reporting(0) **/
		/** error_reporting(-1) **/
		unset($edad);
		echo '<p>El tipo de $edad es: '.gettype($edad).'</p>';

		unset($esEstudiante);
		echo '<p>El tipo de $esEstudiante es: '.gettype($esEstudiante).'</p>';

		/*******  operador ternario  *********/
		echo ($esEstudiante ?"Hola Estudiante":"Quien eres");
		echo "<br>";
		echo (3>4?"Incorrecto":"Correcto");
		/*** constantes ***/
		//una constante en php se define usando la funcion define()
		define("MI_NUMERO_TELEFONICO", 99991219);
		echo "<P>Mi numero telefonico es: ",MI_NUMERO_TELEFONICO,"</p>";
		echo "<P>Mi numero telefonico es: ".MI_NUMERO_TELEFONICO."</p>";
		
		define("MI_NUMERO_TELEFONICO", 98540306094);
		echo "<P>Mi numero telefonico es: ",MI_NUMERO_TELEFONICO,"</p>";

		/*** constantes predefinidas ***/
		echo __file__,"<br>";//muestra la direccion C:\AppServ\www\programacion_movil\17-08-2016.php
		echo __dir__,"<br>";// muestra la direccion C:\AppServ\www\programacion_movil
	 ?>
</body>
</html>