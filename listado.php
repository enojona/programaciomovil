
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

<?
      $conexion = new mysqli("localhost","root","root",'programaciomovil');
      if($conexion->conect_errno){
        echo "Error al connectar a la BBDD".
          $conexion->connect_errno.",".
          $conexion->connect_error;
        exit();
      }else{
        $conexion->set_charset("utf8");
      }
    ?>
    <?php
  include('inc/cabecera.php');
  include('inc/menu.php');
     include('inc/conexion.php');


?>

<div class="container">

  <div class="row">
    <div class="col-md-8">

      <h1> Listado de Personas</h1>
      <table class='table'>
        
        <tr>
           <th> id </th>
              <th> apellidos y nombres</th>
           <th>Fecha creacion</th>
         </tr>
         <?php 
         $consulta=$conexion ->query('SELECT P.* FROM personas p');
         while ($fila=$consulta -> fetch_assoc()){
          ?>
          <tr>
             <td> <?php echo $fila['personas_id'];?> </td>
            <td> <?php echo $fila['paterno'].' '.$fila['materno'].' '.$fila['nombres'];?> </td>
            <td> <?php echo $fila ['fecha_creacion'];?></td>
            <td> 
            <a href="modificar.php?id=<?php echo $fila['personas_id'];?>"> 
            <span class="glyphicon glyphicon-edit"></span>
            </a>
            </td>
            <?php
         }
         ?>

	<div data-role="page" data-fullsreen="true">
<div data-role="header" data-position="fixed">
<h1>programacion Movil</h1>
<div data-role="navbar">
<ul>
<li><a href="javascrip:alert('Inicio');"<>
Inicio </a> </li>
<li><a href="javascrip:alert('Listado');"> 
Listado </a></li>
<li><a href="javascrip:alert('Nuevo')">
Nuevo </a></li>
</ul>
</div>

</div>
<div data-role="content">
    <h1> Bienvenidos</h1>
    <ul>
    <div data-filter="true">
    <div data-role="listview">
    <li data-role="list-divider">Personas</li>
     <li><a href ="">Yenny Karen Farfan Mamani </a></li>
     <li><a href ="">Magaly Guevara Lupaca</a></li>
      <li><a href ="">Ferrer Guzman Mita </a></li>
       <li><a href ="">Luis Felipe Mamani</a></li>
        </ul>
    </div>
    <div data-role="footer" data-position="filex">
    <h1> UNITEK-Puno</h1>

    </div>
    </div>
    </div>
	<!--un archivo html puede contener mas de una pagina(page)-->
	<!--una pagina(page) puede definirse en un archivo fisico separado-->
	<!--varias paginas en un archivo fisico unico no generan resquest-response adicionales-->
	<!-- paginas en archivos fisicos separados generan grupos request-response adicionales-->
	<!-- los archivos de recursos/librerias(css,js)pueden ser locales al sitio o ser usados desde un CDN-->
</body>
</html>