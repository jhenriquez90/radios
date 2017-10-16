<?php
$db_nombre="conectividad";
$conexion= mysqli_connect("localhost","root") 
or die('error');
$basedatos = mysqli_select_db($conexion,$db_nombre) or die(mysqli_error());
?>