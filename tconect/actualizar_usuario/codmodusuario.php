<?php
session_start();
require("../conexion/conexion.php");
$correo=$_POST['usuario'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$nivel=$_POST['nivel'];
	$contra= md5($pass);
	if($pass==null) {
		$sentencia="UPDATE usuario SET user='$correo',cod_nivel='$nivel' WHERE user='$correo'";
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	
		echo "<script>location.href='usuarios.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='usuarios.php'</script>";
	
	}
		}
		else
		{
	$sentencia="UPDATE usuario SET user='$correo',pass='$pass',cod_nivel='$nivel' WHERE user='$correo'";
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	
		echo "<script>location.href='usuarios.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='usuarios.php'</script>";	
	}
	}
?>